<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form ActiveForm */
$this->title="家长学生信息录入";
$session=\yii::$app->session;
$username=$session->get('username');

?>
<h3>家长学生信息录入</h3>
<br>
<div class="site-student">
<div style="width:40%">
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($t_model, 'family_phone')->textinput(['value'=>"$username",'readOnly'=>'true'])?> 
        <?= $form->field($t_model, 'family_name') ?>
        <?= $form->field($t_model, 'student_education')->dropDownList(['小学生'=>'小学生','初中生'=>'初中生','高中生'=>'高中生'],
                                                                      ['prompt'=>"请选择...",'style'=>'width:80%']) ?> 
        <?= $form->field($t_model, 'student_sex')->dropDownList(['男'=>"男",'女'=>"女"],['prompt'=>"请选择..",'style'=>'width:80%']) ?>
        <?= $form->field($t_model, 'student_age') ?>
        <?= $form->field($t_model, 'family_address') ?>
        <?= $form->field($t_model, 'student_introduce')->textarea()?>
    
        <div class="form-group">
            <?= Html::submitButton('保存', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>

</div><!-- site-student -->
