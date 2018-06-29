<?php

use yii\helpers\Html;

$this->title = "教师详细信息";

?>
<br>
<h3>教师详细信息</h3>
<br>


<table width="100%" border="1" >
    <tr>
        <td width="38%" height="35px" bgcolor="#CCFFFF">家长姓名:</td>
        <td height="35px" bgcolor="#F0FFF0"><?php echo $model1['family_name'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#E6E6FA">教育水平:</td>
        <td height="35px" bgcolor="#F5F5DC"><?php echo $model1['student_education'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#CCFFFF">学生性别:</td>
        <td height="35px" bgcolor="#F0FFF0"><?php echo $model1['student_sex'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#E6E6FA">学生年龄:</td>
        <td height="35px" bgcolor="#F5F5DC"><?php echo $model1['student_age'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#CCFFFF">家庭住址:</td>
        <td height="35px" bgcolor="#F0FFF0"><?php echo $model1['family_address'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#E6E6FA">联系电话:</td>
        <td height="35px" bgcolor="#F5F5DC"><?php echo $model1['family_phone'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#CCFFFF">在学年级:</td>
        <td height="35px" bgcolor="#F0FFF0"><?php echo $model2['school_rank'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#E6E6FA">补习科目:</td>
        <td height="35px" bgcolor="#F5F5DC"><?php echo $model2['class_name'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#CCFFFF">学生简介:</td>
        <td height="35px" bgcolor="#F0FFF0"><?php echo $model1['student_introduce'] ?></td>
    </tr>
    
</table>
<br>
<style>
.lv{
	font-size:15px;
	text-align:right;
	float:right;
	font-family:Arial, "宋体";
	position:absolute;
	right:230px;
	
}
</style>
<div class="lv">
<?=Html::a('返回上页',['student/index'],['class' => 'btn btn-primary']);?>
</div>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

