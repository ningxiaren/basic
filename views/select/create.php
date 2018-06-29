<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SelectClass */

$this->title = '添加记录';
$this->params['breadcrumbs'][] = ['label' => '添加', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="select-class-create">

    <h3><?= Html::encode($this->title) ?></h3>
    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
