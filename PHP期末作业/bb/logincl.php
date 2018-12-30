<?php
include "sqlcon.php";
session_start();
if(isset($_POST['zc']))
{
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];
	if($pass1!=$pass2)
	  echo "<script>alert('两次密码不一致，请重新注册！');location.href='login.php';</script>";
	else
	{
		
		$user=trim(strtolower($_POST['user']));
		$sql="select * from userinfo where username='".$user."'";
		$rr=mysql_query($sql);
		if(mysql_num_rows($rr)!=0)
		  echo "<script>if(confirm('用户名已存在，是否重新注册？'))location.href='login.php';else location.href='index.php';</script>";
		else
		{
			
			$sex=$_POST['sex'];
			$age=$_POST['age'];
			$email=$_POST['email'];
			if(!preg_match("/^\S{6,}$/",$pass1)){
			    echo "<script>alert('密码格式错误，请重新注册！');location.href='login.php';</script>";
				exit();
			}
			else{
			if(!preg_match("/^[a-zA-Z0-9_\-]+@[a-zA-Z0-9\-]+\.[A-Za-z0-9\-\.]+$/",$email)){
			   echo "<script>alert('email格式错误，请重新注册！');location.href='login.php';</script>";
			   exit();
			}	
			else{
			if($_FILES['photo']['type']!=="image/gif")
			{
				echo "<script>alert('文件格式错误，必须上传GIF图片！');location.href='login.php';</script>";
				exit();
			}
			if($_FILES['photo']['size']>10*1024)
			{
				echo "<script>alert('文件大小错误，不能大于 10K！');location.href='login.php';</script>";
				exit();
			}
			$filename="./image/".date("YmdHis").$user.".gif";
			if(!is_uploaded_file($_FILES['photo']['tmp_name']))
			{
				echo "<script>alert('不是上传的照片！');location.href='login.php';</script>";
				exit();
			}
			move_uploaded_file($_FILES['photo']['tmp_name'],$filename);
			$sql="insert into userinfo values('".$user."','".md5($pass1)."','".$sex."',$age,'".$email."','".$filename."')";
			mysql_query($sql) or die("注册失败！");
            $_SESSION['xingming']=$user;
            setcookie("user",$user,time()+60);
			echo "<script>if(confirm('注册成功，是否继续注册？'))location.href='login.php';else location.href='index.php';</script>";
		}
	}
	}
	}
}