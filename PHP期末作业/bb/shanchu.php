
<html>
<head>
<!-- TemplateBeginEditable name="doctitle" -->
<title>�ޱ����ĵ�</title>
<!-- TemplateEndEditable -->
<style type="text/css">
#container {
	height:2000px;
	width: 1000px;
	margin: auto;
}
#top1 {
	margin: auto;
	height: 138px;
	width: 1000px;
}
.hongzi {
	font-family: "������κ";
	font-size: 18px;
	font-weight: bold;
	color: #F00;
}
.heixi {
	font-family: "������κ";
	font-size: 36px;
	font-weight: bolder;
	color: #000;
	padding-bottom: 50px;
}
#top2 {
	height: 80px;
	width: 1000px;
}
#top3 {
	height: 285px;
	width: 1000px;
	background-color: #FFF;
	background-image: url(images/shilihongzhang.jpg);
	background-attachment: scroll;
	background-repeat: repeat-x;
	background-position: center center;
}
.daohang {
	font-family: "������κ";
	font-size: 16px;
	color: #333;
	background-color: #CCC;
	text-align: center;
}
#left {
	float: left;
	height: 550px;
	width: 280px;
	padding-left: 20px;
	background:url(images/timg.jpg);
}
.dazuozi {
	font-family: "������κ";
	color: #F3C;
	font-size: 24px;
}
.xiaozuozi {
	font-family: "������κ";
	font-size: 18px;
	color: #0FF;
}
.qq {
	padding-left: 50px;
}
#right {
	
	height: 550px;
	width: 717px;
	background:url(images/beijing.jpg);
}

#zhong{
	height: 550px;
	width: 1000px;
	}
#foot1 {
	height: 40px;
	width: 1000px;
	font-family: "������κ";
	font-size: 30px;
	font-weight: bold;
	color:#999;
	background-color:#CCC;
	text-align: center;
}
#foot2 {
	height: 30px;
	width: 1000px;
	font-family: "������κ";
	font-size: 18px;
	color:#999;
	background-color:#CCC;
	text-align: center;
}
#apDiv1 {
	position: absolute;
	width: 219px;
	height: 159px;
	z-index: 1;
	left: 630px;
	top: 1248px;
}
</style>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<div id="container">
  <div id="top1"><img src="images/diyi.jpg" width="1002" height="138" /></div>
  <div id="top2">
    <table width="1000" height="82" border="0" id="table">
      <tr class="daohang">
        <td width="125" height="78"><p class="bian">��ҳ</p>
        <p class="bian">HOME</p></td>
        <td width="125"><p class="bian">��˾���</p>
        <p class="daohang">ABOUT</p></td>
        <td width="125"><p class="bian">������Ʒ</p>
        <p class="bian">CASE</p></td>
        <td width="125"><p class="bian">������ϵ</p>
        <p class="bian">PRODUCT</p></td>
        <td width="125"><p class="bian">�������</p>
        <p class="bian">SERVICE</p></td>
        <td width="125"><p class="bian">��ɴ���</p>
        <p class="bian">DRESS</p></td>
        <td width="125"><p class="bian">���¶�̬</p>
        <p class="bian">NEWS</p></td>
        <td width="125"><p>��ϵ����</p>
        <p>CONTACT</p></td>
      </tr>
    </table>
  </div>
  <div id="top3">
    <marquee scrollamount=8 scrolldelay=3 behavior="scroll">
      <img src="images/dong1.jpg" width="997" height="285" /><img src="images/dong2.jpg" width="997" height="285" /><img src="images/dong3.jpg" width="997" height="285" />
    </marquee>
  </div>
  <div id="zhong">
  <div id="left">
    <p class="dazuozi">ʮ���ױ ���¶�̬ </p>
    <ol>
      <li class="xiaozuozi">�»�֮ҹ�ֶ�����Ц��..</li>
      <li class="xiaozuozi">.���������в��ɻ�ȱ��...</li>
      <li class="xiaozuozi">�������Ĵʴ��Ƽ���...</li>
      <li class="xiaozuozi">������ʮ��ԭ��...</li>
      <li class="xiaozuozi">ֵ��ѧϰ����Ӱʦ����...</li>
    </ol>
    <p class="dazuozi">ʮ���ױ ������ϵ</p>
    <ol>
      <li class="xiaozuozi">5699Ԫˮ��֮������</li>
      <li class="xiaozuozi">7299Ԫ��֮��������</li>
      <li class="xiaozuozi">8999Ԫ��Ұ��������</li>
      <li class="xiaozuozi">11999Ԫ�����ļ�����</li>
    </ol>
    <p class="dazuozi">��ϵ���� / Contact Us</p>
    <ul>
      <li class="xiaozuozi">�绰��0313-7758521</li>
      <li class="xiaozuozi">�ֻ���15690355036</li>
      <li class="xiaozuozi">���䣺1803852295@qq.com</li>
      <li class="xiaozuozi">��ַ��ʯ��ׯ��ְҵѧԺ13��¥</li>
    </ul>
    <p><img src="images/QQ.jpg" width="108" height="29" class="qq" /></p>
  </div>
  <div id="right">
<?php 
include "sqlcon.php";
$sql="select username from userinfo";
$result=mysql_query($sql);
?>
<form method="post" action="shanchucl.php">
<select name='yh'>
<?php 
while($rr=mysql_fetch_row($result))

echo "<option value='".$rr[0]."'>".$rr[0]."</option>";
?>
</select><br>
<input type="submit" name="sc" value="ɾ��">
</form>
  </div>
  </div>
  <div id="foot1">&nbsp;&nbsp;&nbsp;��ϵ���� | ��ƸӢ��</div>
  <div id="foot2">&nbsp;Copyright@ʮ���ױ���칫˾ 408����  ����</div></div>
</body>
</html>