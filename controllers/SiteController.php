<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Teacher;
use app\models\User;
use app\models\course;
use app\models\SelectClass;
use yii\data\ArrayDataProvider;



class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                                    'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'backColor'=>0x000000,//背景颜色
                'maxLength' => 5, //最大显示个数
                'minLength' => 5,//最少显示个数
                'padding' => 5,//间距
                'height'=>40,//高度
                'width' => 70,  //宽度  
                'foreColor'=>0xffffff,     //字体颜色
                'offset'=>2,        //设置字符偏移量 有效果
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
         
        $session=\yii::$app->session;
        print_r($_SESSION);
        $id=$session->get('__id');
        return $this->render('teacher_info', [
            'model' => $this->findModel($id),
        ]);

        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        $user=new User();
        $userworker=$user->FindUserWorker();
        
        
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            //echo $model['worker']."<br>";
            $session=\yii::$app->session;
            $username=$session->set('username',$model['username']);
            $password=$session->set('password',$model['password']);
            $worker=$session->set('worker',$model['worker']);   
            $userunique=$user->FindUserUnique();
            if($userunique)
           {
                echo "<script>alert('你的手机号已经被注册，请重新注册')</script>";
                return $this->render('contact', [
                                     'model' => $model,
                                     ]);
           }
            $user=new user();
            $user->InsertUserInfo();
         //   print_r($_SESSION);die;
            //echo "jhbjhbjh";die;
        }

        
        if($model['worker']=="家教")   //第一次用post得到的值判断用户种类
        {
            $t_model=new Teacher();  
            return $this->render('teacher_detail',['t_model'=>$t_model,]); 
        }
        if($model['worker']=='家长')
        {
             return $this->render('student_detail',['t_model'=>$t_model,]);
        }
        
        if($userworker['worker']=="家教")   //用session值得到用户种类
        {
            $t_model=new Teacher();
            $s_model=new SelectClass();
            if($t_model->load(Yii::$app->request->post()))
            {
                $session=\yii::$app->session;
                $username=$session->get('username');
                $exists = Teacher::find()->where([ 'teacher_name' => $username])->exists(); 
                if($exists)
                {
                    $t_model->deleteAll(['teacher_name'=>$username]);
                }
                $t_model->insert();
                //选课；
                return $this->render('selectclass',['s_model'=>$s_model]);
            }
            if($s_model->load(Yii::$app->request->post()))
            {
                $s_model->insert();
                return $this->actionLogin();
            }

        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    //
    public function actionAbout()
    {
        return $this->render('about');
    }
    //跳转用户教师主页
    protected function findModel($id)
    {
        if (($model = Teacher::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
