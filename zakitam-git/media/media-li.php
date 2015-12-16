<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>差旅东南亚体验菲律宾</title>
<meta name="description" content="">
<meta name="author" content="">


<link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/index.css" rel="stylesheet" type="text/css">


</head>
<body>
<?php
include("D:\git\zakitam-git\header.php");
?>

<div class="b-wrap"> 
<div class="container li-wrap" >
<div class="row clearfix">
		<div class="col-md-12 column">
			<ul class="breadcrumb">
				<li>
					 <a href="index.html">首页</a>
				</li>
				<li>
					 <a href="media.html#ld">Gopo技巧</a>
				</li>
				<li class="active">
					<h1 >差旅东南亚体验菲律宾</h1>
				</li>
          <div class="qrcode  visible-md visible-lg">
                    <div class="mob-s" >手机扫码分享</div>
                    <div id="output"></div>
                    </div>
			</ul>

		</div>
	</div>
<div class="row clearfix">
		<div class="col-md-8 column">
        <div class="li-media-wrap">
        <iframe width="100%" height="100%" src="http://player.youku.com/embed/XMTM5MzQ2OTE0MA==" frameborder=0 allowfullscreen></iframe>
      </div>
		</div>
		<div class="col-md-4 column li-header-wrap">
           <div class="li-header-on" >
        <div class="li-title" id="myModalLabel"> <p>相关产品</p></div>
    
      </div>
      <div class="li-header-con">
            <div class="thumbnail"> <img src="http://imgs.windmsn.com/zakitam/uploads/151126/4-151126214ZXW.jpg" /> </div>
            <div class="thumbnail"> <img src="http://imgs.windmsn.com/zakitam/uploads/151126/4-151126214ZXW.jpg" /> </div>
            <div class="thumbnail"> <img src="http://imgs.windmsn.com/zakitam/uploads/151126/4-151126214ZXW.jpg" /> </div>
            <div class="thumbnail"> <img src="http://imgs.windmsn.com/zakitam/uploads/151126/4-151126214ZXW.jpg" /> </div>
		</div>
        </div>
	</div>
</div>
</div>
<?php
include("../footer.php");
?>
   
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script> 
<script type="text/javascript" src="../js/jquery.qrcode.min.js"></script><!--二维码-->
<script type="text/javascript" src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){ 
	$(".navbar-toggle").click(function(){
$(".navbar").toggleClass("navblue-on");
});
$(".dropdown-toggle").click(function(){
$(".dropdown-menu").toggleClass("large");
});
$(".navbar-blue").addClass("large");
});
<!--标题获取-->

</script>

 <script>
$(function(){
	$(".qrcode").hover(function(){
$(".qrcode").toggleClass("on-hover");
});
	$('#output').qrcode(window.location.href);
})
</script>

</body>
</html>