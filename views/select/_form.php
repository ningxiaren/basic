<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SelectClass */
/* @var $form yii\widgets\ActiveForm */
$date=date("Y-m-d",time());
$id=\Yii::$app->user->identity->username;
?>

<div class="select-class-form">
    <div style="width:60%">

    <?php $form = ActiveForm::begin(); ?>
    
     <?= $form->field($model, 'create_time')->textInput(['value'=>$date,'readonly'=>'true']) ?>
        
     <?= $form->field($model, 'user_name')->textInput(['value'=>$id,'readonly'=>'true']) ?>

     <?= $form->field($model, 'school_rank')->dropDownList(['小学'=>"小学",'初中'=>"初中",'高中'=>"高中"],
                                                ['prompt'=>"请选择..",'style'=>'width:40%']) ?>
    
     <?= $form->field($model, 'class_name')->dropDownList(['语文'=>"语文",'数学'=>"数学",'英语'=>"英语",'美术'=>"美术",'舞蹈'=>"舞蹈"],
                                                ['prompt'=>"请选择..",'style'=>'width:40%']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
