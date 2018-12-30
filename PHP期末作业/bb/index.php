<html>
<head>
<title>无标题文档</title>
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
	font-family: "华文新魏";
	font-size: 18px;
	font-weight: bold;
	color: #F00;
}
.heixi {
	font-family: "华文新魏";
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
	font-family: "华文新魏";
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
	font-family: "华文新魏";
	color: #F3C;
	font-size: 24px;
}
.xiaozuozi {
	font-family: "华文新魏";
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
	font-family: "华文新魏";
	font-size: 30px;
	font-weight: bold;
	color:#999;
	background-color:#CCC;
	text-align: center;
}
#foot2 {
	height: 30px;
	width: 1000px;
	font-family: "华文新魏";
	font-size: 18px;
	color:#999;
	background-color:#CCC;
	text-align: center;
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
        <td width="125" height="78"><p class="bian">首页</p>
        <p class="bian">HOME</p></td>
        <td width="125"><p class="bian">公司简介</p>
        <p class="daohang">ABOUT</p></td>
        <td width="125"><p class="bian">婚礼作品</p>
        <p class="bian">CASE</p></td>
        <td width="125"><p class="bian">婚礼套系</p>
        <p class="bian">PRODUCT</p></td>
        <td width="125"><p class="bian">婚礼服务</p>
        <p class="bian">SERVICE</p></td>
        <td width="125"><p class="bian">婚纱礼服</p>
        <p class="bian">DRESS</p></td>
        <td width="125"><p class="bian">最新动态</p>
        <p class="bian">NEWS</p></td>
        <td width="125"><p>联系我们</p>
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
    <p class="dazuozi">十里红妆 最新动态 </p>
    <ol>
      <li class="xiaozuozi">新婚之夜闹洞房搞笑招..</li>
      <li class="xiaozuozi">.完美婚礼中不可或缺的...</li>
      <li class="xiaozuozi">经典结婚誓词大推荐！...</li>
      <li class="xiaozuozi">婚礼当天十大原则...</li>
      <li class="xiaozuozi">值得学习，摄影师拍摄...</li>
    </ol>
    <p class="dazuozi">十里红妆 经典套系</p>
    <ol>
      <li class="xiaozuozi">5699元水晶之恋明场</li>
      <li class="xiaozuozi">7299元爱之物语明场</li>
      <li class="xiaozuozi">8999元绿野仙踪明场</li>
      <li class="xiaozuozi">11999元迷人四季明场</li>
    </ol>
    <p class="dazuozi">联系我们 / Contact Us</p>
    <ul>
      <li class="xiaozuozi">电话：0313-7758521</li>
      <li class="xiaozuozi">手机：15690355036</li>
      <li class="xiaozuozi">邮箱：1803852295@qq.com</li>
      <li class="xiaozuozi">地址：石家庄理工职业学院13号楼</li>
    </ul>
    <p><img src="images/QQ.jpg" width="108" height="29" class="qq" /></p>
  </div>
  <div id="right">
  <?php 
session_start();
 if(isset($_COOKIE['user']) && !isset($_SESSION['xingming']))
   $_SESSION['xingming']=$_COOKIE['user'];
 if(isset($_SESSION['xingming']))
   echo $_SESSION['xingming']."你好，欢迎光临十里红妆！<br>";
?>
<div>
<font size="5px">
<a href='login.php'>用户注册</a><br>
<a href='denglu.php'>用户登录</a><br>
<a href='xiugai.php'>修改密码</a><br>
<a href='shanchu.php'>删除账户</a><br>
<a href='logout.php'>退出账户</a>
</font>
</div>
  </div>
  </div>
  <div id="foot1">&nbsp;&nbsp;&nbsp;联系我们 | 诚聘英才</div>
  <div id="foot2">&nbsp;Copyright@十里红妆婚庆公司 408宿舍  刘洋</div></div>
</body>
</html>
