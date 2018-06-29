<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$session=\yii::$app->session;
$id=$session->get('__id');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '家教中介网',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '首页', 'url' => ['/site/index']],
            ['label' => '注册', 'url' => ['/site/contact']],
            ['label' => '家教中心','url' =>['/teacher/index']],
            ['label' => '学生中心','url' =>['/student/index']],
            Yii::$app->user->isGuest ? (
                ['label' => '登录', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    '退出 (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
            Yii::$app->user->isGuest ? (
                ['label' => '',]
            ) :
            ['label' =>'基本操作',
                 'icon'=>'share',
                  'url'=>'#',
                  'items'=>[
                      ['label'=>'修改密码','url'=>['/site/changepsw']],
                      ['label'=>'查看个人信息','url'=>['/teacher/view?id='.$id,],
                        'visible'=>Yii::$app->user->identity->worker=='家教',
                        ],
                      ['label'=>'查看个人信息','url'=>['/student/view?id='.$id,],
                        'visible'=>Yii::$app->user->identity->worker=='家长',
                        ],
                      
                      ['label'=>'修改个人信息','url'=>['/teacher/update?id='.$id,],
                           'visible'=>Yii::$app->user->identity->worker=='家教',
                          ],
                      ['label'=>'修改个人信息','url'=>['/student/update?id='.$id,],
                           'visible'=>Yii::$app->user->identity->worker=='家长',
                       ],
                      ['label'=>'查看课程信息','url'=>['/select/index']],
                      ['label'=>'匹配结果信息','url'=>['/match/index']],
 
                      
                      
                  ]],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">版权所有：&copy; 信1501-1 337宿舍 <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
