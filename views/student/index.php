<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '学生信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h3><?= Html::encode($this->title) ?></h3>

    <br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'family_phone',
            'family_name',
            'student_education',
            'student_sex',
            'student_age',
            'family_address',
            [
           'class'=>'yii\grid\ActionColumn',
           'header'=>'操作',
           'template'=>'{view}',
           'buttons'=>[
                'view' => function ($url, $key) {// 对应{student-view}，三个参数，最主要的$key，为你model主键的id  
                    $url=['student_info','id'=>$key['family_phone']];  //将username传给id
                    $options = [  
                        'title' => '查看',  
                        'aria-label' => '查看',  
                        'data-pjax' => '0',  
                    ];  
                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, $options);  
                },         
           ]
         
            ],
                        
            [
                'label'=>"更多操作",
                'format'=>'raw',
                'value' => function($key){
                $id=$key['family_phone'];      
                $url=['..\match\index','id'=>$id];
                return Html::a('匹配', $url); 
               }                      
          ],    
                        
                        
        ],
                        
    ]); ?>
</div>
