<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link>
<title>Comike Animation--我们热爱动画，和你在一起！(〃'▽'〃)-广告相关</title>
<link rel="icon" href="images/ico.ico" >
<link href="style/index.css" rel="stylesheet" type="text/css">
<link href="style/header.css" rel="stylesheet" type="text/css">
    <script type="text/javascript"  src="js/L2Dwidget.0.min.js"></script>
    <script type="text/javascript"  src="js/L2Dwidget.min.js"></script>
<style type="text/css">
.STYLE2 {font-size: 12px}
.STYLE3 {
	font-size: 16px;
	color: #666666;
}
	#live2dcanvas {
    border: 0 !important;
}
</style>
<!-------->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<div id="bg">
  <div class="nav-mask">
    
    <a href="up_video.html" target="_blank" class="u-link"> 投稿 </a></div>
  <div class="logo"></div>
</div>

<div id="body">

<div class="dison">
    <div id="name-top">
      <h2>用户登录</h2><h3 class="STYLE2" style="color:#666666; display:block;line-height:60px">UserLogin</h3>
 	</div>
<?php
session_start();

?>
<div class="user">
<form action="form.php" method="post">
    <b>验证码</b><img src="yanzhengma.php">
    <a href="" id="change">看不清，换一张</a>
    请输入验证码
<br>

  
  
  
</form>
<?php





?>
</div>


</div>
	

<script src="js/jquery.min.js"></script><!--轮播图JS脚本-->
<script src="js/HappyImage.min.js"></script>
<script>
            $( "#target-1" ).HappyImage({
            	effect: "slide"
            });
        </script>
 <script>
      L2Dwidget.init({"display": {
      "superSample": 2,
      "width": 200,
      "height": 400,
              "position": "right",
                  "hOffset": 0,
      "vOffset": 0
          }
      });
    </script>
</body>
	
</html>
