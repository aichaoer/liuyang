<?php
include "sqlcon.php";
session_start();
if(isset($_POST['dl']))
{
	$user=trim(strtolower($_POST['user']));
	$pass=md5($_POST['pass1']);
	$sql="select * from userinfo where username='".$user."'";
	$result=mysql_query($sql);
	//echo mysql_num_rows($result);
	if(mysql_num_rows($result)==0)
	  echo "<script>alert('用户名不存在，请重新登录！');location.href='denglu.php';</script>";
	else 
	{   $_SESSION['xingming']=$user;
		$rr=mysql_fetch_assoc($result);
		if($rr['password']!=$pass)
		 echo "<script>alert('密码错误，请重新登录！');location.href='denglu.php';</script>";
		else 
		{
			$_SESSION['xingming']=$user;
			setcookie("user",$user,time()+60);
			echo "<script>alert('登录成功！欢迎访问！');location.href='index.php';</script>";
		}
	}
}