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
	  echo "<script>alert('�û��������ڣ������µ�¼��');location.href='denglu.php';</script>";
	else 
	{   $_SESSION['xingming']=$user;
		$rr=mysql_fetch_assoc($result);
		if($rr['password']!=$pass)
		 echo "<script>alert('������������µ�¼��');location.href='denglu.php';</script>";
		else 
		{
			$_SESSION['xingming']=$user;
			setcookie("user",$user,time()+60);
			echo "<script>alert('��¼�ɹ�����ӭ���ʣ�');location.href='index.php';</script>";
		}
	}
}