<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SelectClass */

$this->title = '课程信息';
$this->params['breadcrumbs'][] = ['label' => '课程与年级', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="select-class-view">

    <h3><?= Html::encode($this->title) ?></h3>
    <br>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'class_name',
            'user_name',
            'school_rank',
            'create_time',
        ],
    ]) ?>
    <?=Html::a('保存','index',['class' => 'btn btn-primary']);?>

</div>
