<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '年级与课程';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="select-class-index">

    <h3><?= Html::encode($this->title) ?></h3>

    <br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'class_name',
            'user_name',
            'school_rank',
            'create_time',

            ['class' => 'yii\grid\ActionColumn',
                'header'=>"操作"],
        ],
    ]); ?>
    
    <p>
        <?= Html::a('添加课程年级', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
