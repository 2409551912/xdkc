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
<body>
    <div class="host_mes">
        <p class="exit"><a href="/xdkc/index.php/Home/Login/login_exit">退出登录
        </a></p>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action="/xdkc/index.php/Home/User/mod" method="post" enctype="multipart/form-data">
        <p class="tit">个人信息</p>
        <div class="icon">
        <input type="file" value="更换头像" name="icon">
        <div style="width:80px;height:70px;">
            <img src="/xdkc/Public/<?php echo ($vo["user_icon"]); ?>">
        </div>
        <p>更换头像>></p>
        </div>

        <ul>
        <li>姓名：<input type="text" name="user_nickname" class="c_name" value="<?php echo ($vo["user_nickname"]); ?>"</li>
        <li>联系方式：<input type="text" name="user_phone" class="c_contact" value="<?php echo ($vo["user_phone"]); ?>"></li>
        </ul>
            <p class="address">请填写联系地址</p>
            <textarea rows="3" name="user_address" class="c_address"><?php echo ($vo["user_address"]); ?></textarea>
            <input type="submit" onclick="return check();"class="sub" id="sub" value="修改">
        </form><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
<script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/touch.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/idangerous.swiper.min.js"></script>
<script type="text/javascript">
    var sub=document.getElementById("sub");
    function c_null(){
        var c_name=$(".c_name").val();
        var c_contact=$(".c_contact").val();
        var c_address=$(".c_address").val();
        var c_null=[c_name,c_address,c_null];
        for(var i=0;i<c_null.length;i++){
            if(c_null[i]==""){
               alert("请填写完整");
               return false;
            }
        }
        
    }

    function check(){
        if(c_null()==false){
        alert("请填写完整");
    }
}
</script>

</body>
</html>