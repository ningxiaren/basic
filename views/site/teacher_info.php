<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */

$this->title = '教师信息';

?>
<div class="teacher-view">

    <h3><?= Html::encode($this->title) ?></h3>
    <br>

 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'teacher_name',
            'teacher_sex',
            'teacher_age',
            'teacher_address',
        ],
    ]) ?>
    <p>
        <?= Html::a('修改', ['teacher/update', 'id' => $model->teacher_name], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
