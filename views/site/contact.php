<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '注册';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>


        <p>
            欢迎注册家教中介网！
        </p>

        <div class="row">
            <div class="col-lg-5">

               <?php $form = ActiveForm::begin(); ?>
                <!--此处的autofocus是为了让鼠标一开始就显示在name -->
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <?= $form->field($model, 'i_password')->passwordInput() ?>
                <!--此处加入inline（）是为了让单选框变为横向的-->
                    
                    <?=$form->field($model, 'worker')->dropDownList(['家长'=>'家长','家教'=>'家教'], 
                                                                     ['prompt'=>'请选择..','style'=>'width:75%']) ?>
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('注册', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

</div>
