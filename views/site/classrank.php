<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\classrank */
/* @var $form ActiveForm */
?>
<div class="site-classrank">

    <?php $form = ActiveForm::begin(); ?>

       
        <?= $form->field($ranklist, 'rank_name')?>
        <?= $form->field($ranklist, 'rank_school') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-classrank -->
