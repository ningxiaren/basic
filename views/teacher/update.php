<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */

$this->title = '修改教师信息: ' ;
$this->params['breadcrumbs'][] = ['label' => '教师', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacher_name, 'url' => ['view', 'id' => $model->teacher_name]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="teacher-update">

    <h3><?= Html::encode($this->title) ?></h3>
    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
