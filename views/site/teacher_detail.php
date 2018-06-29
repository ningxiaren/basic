<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form ActiveForm */
$this->title="家教信息录入";
$session=\yii::$app->session;
$username=$session->get('username');

?>
<div class="teacher_detail">
     <h3><?= Html::encode($this->title) ?></h3>
     <br>
    <?php $form = ActiveForm::begin(); ?>
     
      <div style="width:40%">
        <?= $form->field($t_model, 'teacher_phone')->textinput(['value'=>"$username",'readOnly'=>'true'])?>
        <?= $form->field($t_model, 'teacher_name')?>

        <?= $form->field($t_model, 'teacher_age') ?>
        <?= $form->field($t_model, 'teacher_address') ?>
        <?= $form->field($t_model, 'teacher_education')->dropDownList(['大学生'=>'大学生','在职教师'=>'在职教师','其他'=>'其他'],
                                                                      ['prompt'=>"请选择...",'style'=>'width:80%']) ?>
     
        <?= $form->field($t_model, 'teacher_sex')->dropDownList(['男'=>"男",'女'=>"女"],['prompt'=>"请选择..",'style'=>'width:80%']) ?>
          
        <?= $form->field($t_model, 'teacher_introduce')->textarea() ?>
          
      </div>
     <br>
        <div class="form-group">
            <?= Html::submitButton('下一步',['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- teacher_detail -->
