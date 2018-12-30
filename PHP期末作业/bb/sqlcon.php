<?php
mysql_connect("localhost","root","1234") or die("服务器连接失败！");
mysql_select_db("user") or die("数据库选择失败！");
mysql_query("set names gb2312");