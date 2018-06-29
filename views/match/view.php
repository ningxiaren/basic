<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tutormatch */

$this->title = '匹配信息';
$this->params['breadcrumbs'][] = ['label' => '匹配', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutormatch-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'teacher_name',
            'teacher_phone',
            'parent_name',
            'parent_phone',
        ],
    ]) ?>
    <br>
        <p>
        <?= Html::a('保存',['index'],['class'=>'btn btn-success'])?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
