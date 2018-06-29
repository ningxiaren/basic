<?php

use yii\helpers\Html;

$this->title = "教师详细信息";

?>
<br>
<h3>教师详细信息</h3>
<br>


<table width="100%" border="1" >
    <tr>
        <td width="38%" height="35px" bgcolor="#CCFFFF">教师姓名:</td>
        <td height="35px" bgcolor="#F0FFF0"><?php echo $model1['teacher_name'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#E6E6FA">教师身份:</td>
        <td height="35px" bgcolor="#F5F5DC"><?php echo $model1['teacher_education'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#CCFFFF">教师性别:</td>
        <td height="35px" bgcolor="#F0FFF0"><?php echo $model1['teacher_sex'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#E6E6FA">教师年龄:</td>
        <td height="35px" bgcolor="#F5F5DC"><?php echo $model1['teacher_age'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#CCFFFF">教师住址:</td>
        <td height="35px" bgcolor="#F0FFF0"><?php echo $model1['teacher_address'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#E6E6FA">联系电话:</td>
        <td height="35px" bgcolor="#F5F5DC"><?php echo $model1['teacher_phone'] ?></td>
    </tr>

    <tr>
        <td width="38%" height="35px" bgcolor="#CCFFFF">任教年级:</td>
        <td height="35px" bgcolor="#F0FFF0"><?php echo $model2['school_rank'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#E6E6FA">任教科目:</td>
        <td height="35px" bgcolor="#F5F5DC"><?php echo $model2['class_name'] ?></td>
    </tr>
    <tr>
        <td width="38%" height="35px" bgcolor="#CCFFFF">教师简介:</td>
        <td height="35px" bgcolor="#F0FFF0"><?php echo $model1['teacher_introduce'] ?></td>
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
<?=Html::a('返回上页',['teacher/index'],['class' => 'btn btn-primary']);?>
</div>
