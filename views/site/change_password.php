<?php
  
  $this->title="修改密码";
  echo "<br>";
  $oldpassword=$password;
  //echo $oldpassword;
  //die;
  ?>
<h3> 修改个人密码:</h3>
<br>

<form action="updatepsw" method="get" onsubmit="return fail();">
    <p>
        <label>旧 密 码 ：</label>
        <input type="password" name="Old_psw" id="password" value="" />
    </p>
    <p>
        <label>新 密 码 ：</label>
        <input type="password" name="New_psw" id="newpassword" value="" />
    </p>
    <p>
        <label>确认密码：</label>
        <input type="password" name="RNew_psw" id="newpassword2" value=""/>
    </p>
	

    <input type="submit" Onclick="return fail();" value="修改"/>
    
    <script>
            
       function fail(){  
                var psw=document.getElementById("password").value;
                var New=document.getElementById("newpassword").value;  
				var RNew = document.getElementById("newpassword2").value;
				if(psw=='')
				{
					//document.write("输入密码不能为空，请重新输入！");
					alert("输入密码不能为空，请重新输入！");
					return false;
				}
				if(psw!=<?php echo $oldpassword?>)
				{
					//document.write("输入密码与原密码不同，请重新输入！");
					alert("输入密码与原密码不同，请重新输入！");
					return false;
				}
                if(New!=RNew||New=='')
				{
				    alert("新密码为空或两次输入密码不一致，请重新输入！");
					return false;
				}
				
				return true;
	   }
            
            
    </script>


</form>
  
