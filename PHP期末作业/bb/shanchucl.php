<?php
include "sqlcon.php";
if(isset($_POST['sc']))
{
	$yh=$_POST['yh'];
	$sql="delete from userinfo where username='".$yh."'";
	$x=mysql_query($sql);
	if($x!=0)
	  echo "<script>if(confirm('ɾ���ɹ�,�Ƿ����ɾ����')) location.href='shanchu.php';
	  else location.href='index.php';</script>";
}