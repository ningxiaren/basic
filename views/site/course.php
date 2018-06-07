<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\course */
/* @var $form ActiveForm */
?>
<div class="site-course">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($c_model, 'class_id') ?>
        <?= $form->field($c_model, 'class_name') ?>
        <?= $form->field($c_model, 'rank_school') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-course -->
