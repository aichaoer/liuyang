<?php
session_start();
$shu=range(0,9);
$xiao=range('a','z');
$da=range('A','Z');
$yuan=array_merge($shu,$xiao,$da);
$count=sizeof($yuan);
$str="";
for($i=0;$i<4;$i++)
{
	$str_arr[]=$yuan[rand(0,$count-1)];
	$str.=$str_arr[$i];
}

$_SESSION['yzm']=strtolower($str);
$im=imagecreate(100,25);
imagecolorallocate($im,255,255,255);

for($i=0;$i<50;$i++)
{
	$color=imagecolorallocate($im,rand(150,255),rand(150,255),rand(150,255));
	imagesetpixel($im,rand(0,99),rand(0,24),$color);
}

for($i=0;$i<10;$i++)
{
	$color=imagecolorallocate($im,rand(150,255),rand(150,255),rand(150,255));
	imageline($im,rand(0,99),rand(0,24),rand(0,99),rand(0,24),$color);
}

for($i=0;$i<4;$i++)
{
	$color=imagecolorallocate($im,rand(0,150),rand(0,150),rand(0,150));
	imagechar($im,5,(100/4)*$i+rand(0,8),rand(0,5),$str_arr[$i],$color);
}


header("Content-type:image/png");
imagepng($im);
imagedestroy($im);