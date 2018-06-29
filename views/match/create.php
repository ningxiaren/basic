<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tutormatch */

$this->title = '添加信息';
$this->params['breadcrumbs'][] = ['label' => '匹配', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutormatch-create">

    <h3><?= Html::encode($this->title) ?></h3>
    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
