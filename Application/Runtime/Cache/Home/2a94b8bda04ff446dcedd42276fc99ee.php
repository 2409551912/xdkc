<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 <title>小董快餐</title>
 <link href="/xdkc/Public/css/reset.css" rel="stylesheet" type="text/css" />
 <link href="/xdkc/Public/css/animate.css" rel="stylesheet" type="text/css"/>
 <link href="/xdkc/Public/css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="main">
	<img src="/xdkc/Public/images/index1.jpg" width="100%">
	<div class="con">
	<div class="row1">
	 	<a href="/xdkc/index.php/Home/Goods/goods/category_id/1" class="a1 animated">
	 		<h3>爽口饮品</h3>
	 		<p>Tasty drink</p>
	 	</a>
		<a href="/xdkc/index.php/Home/Goods/goods/category_id/2" class="a2 animated">
			<h3>丰富主食</h3>
			<p>&nbspRich food</p>
		</a>
	</div>
	<div class="row2">
	<a href="/xdkc/index.php/Home/Goods/goods/category_id/3" class="a1 animated">
	   <h3>香喷喷~菜</h3>
	  <p>Shop figure</p>
	</a>
</div>
	<div class="row3">
	<a href="/xdkc/index.php/Home/Goods/goods/category_id/4" class="a1 animated">
		<h3>饭后甜点</h3>
		<p>Postprandial</p>
		<p>dessert</p>
	</a>
	<a href="/xdkc/index.php/Home/Goods/goods/category_id/5" class="a2 animated">
		<h3>营养水果</h3>
		<p>nutritive</p>
		<p>fruit</p>
	</a>
		</div>
	</div>
</div>

 <div class="jry" id="jry">
	<div class="demo">
		<img src="/xdkc/Public/images/jry1.jpg">
		<img src="/xdkc/Public/images/jry2.jpg">
		<img src="/xdkc/Public/images/jry3.jpg" class="bottom">
	</div>
 </div>
<script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/touch.min.js"></script>
		<script type="text/javascript">
		   var jry =document.getElementById("jry");
           setTimeout(function(){
           	$("#jry").hide();
           	 $(".row1 .a1").addClass("bounce");
		   	 $(".row1 .a2").addClass("bounce");
		   	 $(".row2 .a1").addClass("flipInX");
		   	 $(".row3 .a1").addClass("bounce");
		   	 $(".row3 .a2").addClass("bounce");
           },1000);
		     $("#jry").tap(function(){
		   	 $("#jry").hide();
		   	 $(".row1 .a1").addClass("bounce");
		   	 $(".row1 .a2").addClass("bounce");
		   	 $(".row2 .a1").addClass("flipInX");
		   	 $(".row3 .a1").addClass("bounce");
		   	 $(".row3 .a2").addClass("bounce");
		    })
		</script>
</body>
</html>