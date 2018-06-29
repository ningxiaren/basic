<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = '学生信息';
$this->params['breadcrumbs'][] = ['label' => '学生', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">

    <h3><?= Html::encode($this->title) ?></h3>
    <br>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'family_phone',
            'family_name',
            'student_education',
            'student_sex',
            'student_age',
            'family_address',
            'student_introduce'
        ],
    ]) ?>

</div>
