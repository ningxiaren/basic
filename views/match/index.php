<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '添加匹配信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutormatch-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <br>

    <p>
        <?= Html::a('添加匹配信息', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'teacher_name',
            'teacher_phone',
            'parent_name',
            'parent_phone',

            ['class' => 'yii\grid\ActionColumn',
                'header'=>"更多操作"],
        ],
    ]); ?>
</div>
