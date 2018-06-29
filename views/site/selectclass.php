<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SelectClass */
/* @var $form ActiveForm */
$session=\yii::$app->session;
$username=$session->get('username');
$date=date("Y-m-d",time());
?>
<div class="selectclass">

    <?php $form = ActiveForm::begin(); ?>
    <div style="width:40%">
        <?= $form->field($s_model, 'user_name')->textInput(['value'=>"$username",'readOnly'=>'true']) ?>
        
        <?= $form->field($s_model, 'create_time')->textInput(['value'=>"$date",'readOnly'=>'true']) ?>
    </div>
        <?= $form->field($s_model, 'school_rank')->dropDownList(['小学'=>"小学",'初中'=>"初中",'高中'=>"高中"],
                                                ['prompt'=>"请选择..",'style'=>'width:40%']) ?>
    
        <?= $form->field($s_model, 'class_name')->dropDownList(['语文'=>"语文",'数学'=>"数学",'英语'=>"英语",'美术'=>"美术",'舞蹈'=>"舞蹈"],
                                                ['prompt'=>"请选择..",'style'=>'width:40%']) ?>
       
    
        <div class="form-group">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- selectclass -->
