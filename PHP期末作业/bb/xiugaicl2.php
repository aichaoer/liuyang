<?php
include "sqlcon.php";
session_start();
	$ymm=md5($_GET['ymm']);
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
				echo "<script>alert('�����޸ĳɹ���');location.href='index.php';</script>";
			}
			else 
			{
				echo "<script>if(confirm('�����޸�ʧ�ܣ��Ƿ������޸ģ�'))location.href='xiugai.php';else location.href='index.php'; </script>";
			}
		}
		else 
		{
			echo "<script>if(confirm('�������벻һ�£��Ƿ������޸ģ�'))location.href='xiugai.php';else location.href='index.php'; </script>";
		}
	}
	else 
	{
		echo "<script>if(confirm('ԭ��������ʧ�ܣ��Ƿ������޸ģ�'))location.href='xiugai.php';else location.href='index.php'; </script>";
	}
