<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'family_phone')->textInput(['maxlength' => true,'readonly'=>'true']) ?>

    <?= $form->field($model, 'family_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_age')->textInput() ?>

    <?= $form->field($model, 'family_address')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'student_introduce')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : '保存', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
