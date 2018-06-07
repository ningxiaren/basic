<?php

namespace app\models;

//class User extends \yii\base\Object implements \yii\web\IdentityInterface
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
  /*  public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];*/
    public static function tableName() {
        return 'user';
    }
    public function rules()
    {
        return [
            [['username', 'password','sign_time'], 'required'],
            [['username'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 32],
            [['authKey'], 'string', 'max' => 100],
            [['accessToken'], 'string', 'max' => 100],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'password' => '密码',
            'sign_time'=> '注册时间',
            'authKey' => 'AuthKey',
            'accessToken' => 'AccessToken',
            'worker'=>'种类'
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        //通过下面呢getid函数得到username
         return static::findOne($id);
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['accesstoken' => $token]);
       /* foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;*/
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
       /* foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }*/
            $user = User::find()
            ->where(['username' => $username])
            ->asArray()
            ->one();

            if($user){
            return new static($user);
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->username;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    //插入用户信息
    public function InsertUserInfo()
    {
        $session=\yii::$app->session;
        $username=$session->get('username');
        $password=$session->get('password');
        $worker=$session->get('worker');
       // echo $worker;die;
        $date=date("Y-m-d",time());
       // print_r($id);die;
        $db=\yii::$app->db;
        $sql=<<<EOF
                insert ignore into user (username,password,sign_time,worker)
                values("$username","$password","$date","$worker")
EOF;
        $command=$db->createCommand($sql);
        $command->execute($sql);
    }
    //验证用户是教师还是家长
    public function FindUserWorker()
    {
        $session=\yii::$app->session;
        $username=$session->get('username');
        $db=\yii::$app->db;
        $sql=<<<EOF
                select worker from user
                where username="$username"
EOF;
        $command=$db->createCommand($sql);
        $row=$command->queryOne();
        return $row;  
    }
    //在插入之前，先看一下是否已存在
    public function FindUserUnique()
    {
        $session=\yii::$app->session;
        $db=\yii::$app->db;
        $username=$session->get('username');
        $sql=<<<EOF
             select username from user
             where username="$username"
EOF;
        $command=$db->createCommand($sql);
        $row=$command->queryOne();
        return $row['username'];  
        
    }
}
