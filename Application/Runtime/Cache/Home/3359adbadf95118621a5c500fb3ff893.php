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
<body class="reg_body">
    <div class="reg">
        <form action="/xdkc/index.php/Home/User/register_action" method="post">
            <p class="tit">注册</p>
            <p>请输入账号(<span>6-12位数字</span>)</p>
            <input type="text" class="account" name="user_account">
            <p>请输入密码(<span>以字母开头,6-12位数字或字母</span>)</p>
            <input type="password" class="psd" name="user_password">
            <p>再次确认密码</p>
            <input type="password" class="s_psd">
            <ul>
                <li>姓名：<input type="text" name="user_nickname" class="c_name"></li>
                <li>联系方式：<input type="text" name="user_phone" class="c_contact"></li>
            </ul>
            <p class="address">请填写联系地址</p>
            <textarea rows="3" name="user_address" class="c_address"></textarea>
            <input type="submit" onclick="return check();"class="sub" id="sub" value="注册">
        </form>
    </div>
<script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/touch.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/idangerous.swiper.min.js"></script>
<script type="text/javascript">
    var sub=document.getElementById("sub");
    function c_account(){
        var str=$(".account").val();
        var expression=/^[0-9]{6,12}$/;
        var obj_exp=new RegExp(expression);
        if(obj_exp.test(str)!=true){
            alert("账号请输入6-12位数字");
        }else{
            return true;
        }
    }
    function c_password(){
        var str=$(".psd").val();
        var expression=/^[a-zA-Z]([a-zA-Z]|[0-9]){5,11}$/;
        var obj_exp=new RegExp(expression);
        if(obj_exp.test(str)!=true){
            alert("请重新输入密码");
        }else{
            return true;
        }
    }
    function cc_password(){
        var str=$(".psd").val();
        var s_str=$(".s_psd").val();
        if(str!=s_str){
            alert("密码输入不一致");
        }else{
            return true;
        }
    }
    function c_null(){
        var account=$(".account").val();
        var psd=$(".psd").val();
        var s_psd=$(".s_psd").val();
        var c_name=$(".c_name").val();
        var c_contact=$(".c_contact").val();
        var c_address=$(".c_address").val();
        var c_null=[account,psd,s_psd,c_name,c_address,c_null];
        for(var i=0;i<c_null.length;i++){
            if(c_null[i]==""){
               alert("请填写完整");
               return false;
            }
        }
        
    }

    function check(){
        if(c_null()!=false){
          if(c_account()){
            if(c_password()){
                if(cc_password()){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
          }else{
            return false;
          }  
        }else{
            return false;
        }
    }
</script>

</body>
</html>