<?php
use yii\helpers\Html;
$this->title="信息简介";
?>

<h3>我们的家教中介网</h3>
<br>


<table width="100%"> 
<tr> 
    <td width="50%" height="200px">
  	
				<script>  //本段代码的功能是将图片放入数组中，以便实现图片的定时切换
				var arr=new Array()
				arr[0]="../images/1.jpeg";
				arr[1]="../images/2.jpeg";
				arr[2]="../images/3.jpeg";
				arr[3]="../images/4.jpeg";
				arr[4]="../images/5.jpg";
				var i=0;
				
				function image()     //使用function函数，便实现图片的定时切换
				{
				var ima=document.getElementById("image");
				ima.src=arr[i]
				i++;
				if(i==5)
				i=0;
				setTimeout("image()",3000)  //图片每2秒切换下一张
				}
				</script>
				
				<body onLoad="image()">
				
				<img id="image" src="1.jpeg">
</body>
				
</td>
 
<td width="20%"></td> 
<td>			
<p>

<img src="../images/8.png" >
</p>
</td>
</tr> 
</table> 