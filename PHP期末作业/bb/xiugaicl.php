<?php
include "sqlcon.php";
session_start();
if(isset($_POST['xg']))
{
	$ymm=md5($_POST['ymm']);
	$sql="select * from userinfo where username='".$_SESSION['xingming']."' and password='".$ymm."'";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)==1)
	{
		$xmm1=$_POST['xmm1'];
		$xmm2=$_POST['xmm2'];
		if($xmm1==$xmm2)
		{
			$sql="update userinfo set password='".md5($xmm1)."' where username='".$_SESSION['xingming']."'";
			if(mysql_query($sql)==1)
			{
				echo "<script>alert('密码修改成功！');location.href='index.php';</script>";
			}
			else 
			{
				echo "<script>if(confirm('密码修改失败，是否重新修改？'))location.href='xiugai.php';else location.href='index.php'; </script>";
			}
		}
		else 
		{
			echo "<script>if(confirm('两次密码不一致，是否重新修改？'))location.href='xiugai.php';else location.href='index.php'; </script>";
		}
	}
	else 
	{
		echo "<script>if(confirm('原密码输入失败，是否重新修改？'))location.href='xiugai.php';else location.href='index.php'; </script>";
	}
}