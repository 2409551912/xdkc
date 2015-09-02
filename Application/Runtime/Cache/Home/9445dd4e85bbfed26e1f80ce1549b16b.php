<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 <title>小董快餐</title>
 <link href="/xdkc/Public/css/reset.css" rel="stylesheet" type="text/css" />
 <link href="/xdkc/Public/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
 <link href="/xdkc/Public/css/page.css" rel="stylesheet" type="text/css" />
</head>
<body class="post_topic">
	<form method="post" action="/xdkc/index.php/Home/Post/deliver_action">
	<div class="top">
		<input type="submit" value="发送" class="sub">
	</div>
	<textarea rows="20" name="post_con">说点什么吧...</textarea>
	</form>
	<div class="bottom"><i>小董社区</i>&nbsp&nbsp<i><span>美味在你身边</span></i></div>
		<script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
		<script>
		   $("textarea").focus(function(){
		   	this.innerHTML="";
		   })
		</script>
</body>
</html>