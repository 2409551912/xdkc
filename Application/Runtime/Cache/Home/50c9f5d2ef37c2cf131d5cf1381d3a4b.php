<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>小董快餐</title>
    <link href="/xdkc/Public/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="/xdkc/Public/css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="/xdkc/Public/css/page.css" rel="stylesheet" type="text/css" />
</head>
<body class="login_body">
     <div class="login">
     	<img src="/xdkc/Public/images/jry1.jpg" class="logo">
     	<form action="/xdkc/index.php/Home/Login/login_sub" method="post">
     		<div class="main">
            	<input type="text" class="account" name="user_account" value="请输入账号">     		
            	<input type="text" class="psd" name="user_password" value="请输入密码">
                <input type="submit" value="登陆" class="log">
            </div>
     	   <input type="button" value="注册" class="register">
        </form>
     </div>
<script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/touch.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/idangerous.swiper.min.js"></script>
<script>
    $(".account").focus(function(){
        $(this).val("");
    })
    $(".psd").focus(function(){
        this.value="";
        this.outerHTML="<input type='password' name='user_password' class='psd' autofocus='autofocus'>";
    })
    $(".register").click(function(){
        location.href="/xdkc/index.php/Home/User/register";
    })
    var arr=[undefined,null,'','请输入密码','请输入账号'];
    $(".log").click(function(){

        var accountVal = $('.account').val();
        var psd = $('.psd').val();
        if(arr.indexOf(accountVal) != -1 || arr.indexOf(psd) != -1){
        alert("请输入用户名和密码");
        return false;
        }
    });
</script>
</body>
</html>