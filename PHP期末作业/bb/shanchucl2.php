<?php
include "sqlcon.php";
	$yh=$_GET['yh'];
	$sql="delete from userinfo where username='".$yh."'";
	$x=mysql_query($sql);
	if($x!=0)
	  echo "<script>if(confirm('ɾ���ɹ�,�Ƿ����ɾ����')) location.href='chakan.php';
	  else location.href='index.php';</script>";