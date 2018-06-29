<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = '修改学生信息: ';
$this->params['breadcrumbs'][] = ['label' => '学生', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->family_name, 'url' => ['view', 'id' => $model->family_name]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="student-update">

    <h3><?= Html::encode($this->title) ?></h3>
    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
