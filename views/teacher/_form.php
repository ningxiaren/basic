<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'teacher_phone')->textInput(['maxlength' => true,'readonly'=>'true']) ?>
    
    <?= $form->field($model, 'teacher_education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_age')->textInput() ?>

    <?= $form->field($model, 'teacher_address')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'teacher_introduce')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '..\teacher\Create' : '保存', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
