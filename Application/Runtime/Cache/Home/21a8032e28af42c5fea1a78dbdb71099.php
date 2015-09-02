<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>小董快餐</title>
 <link href="/xdkc/Public/css/reset.css" rel="stylesheet" type="text/css" />
 <link href="/xdkc/Public/css/animate.css" rel="stylesheet" type="text/css"/>
 <link href="/xdkc/Public/css/page.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="indent">
        <div class="top"><b>订单</b></div>
        <div class="order">        
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class='indent_time'><?php echo ($order_time); ?></div>
<form action="/xdkc/index.php/Home/Order/add_order/goods_id/<?php echo ($vo["goods_id"]); ?>" method='post'>
            <div class='indent_goods'>
                <div class='left'>
                    <img src='/xdkc/Public/<?php echo ($vo["goods_pic"]); ?>'>
                </div>
                <div class='right'>
                    <div class='detail'>
                        <p></p>
                        <p>￥<span><?php echo ($vo["goods_price"]); ?></span></p>
                    </div>
                    <div class='number'>
                        <p>数&nbsp&nbsp量</p>
                        <p class='s_p'><a href='#' class='subtraction'>-</a><input type='text' value='1' name='order_goods_amount'><a href='javascript:void(0)' class='plus'>+</a></p>
                    </div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="indent_sub"><input type="submit" value="确认下单"></div>    
            </form>        
        </div>
    </div>
<script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/touch.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/idangerous.swiper.min.js"></script>
<script>
$(".plus").click(function(){
    var num=$(".s_p input").val();
    var price=$(".detail span").text()/num;
    num++;
    $(".s_p input").val(num);    
    $(".detail span").text(price*num);
})

$(".subtraction").click(function(){
    var num=$(".s_p input").val();
    var price=$(".detail span").text()/num;
    if(num==1){
        $(".s_p input").text(1);
        $(".detail span").text(price)
    }else{
        num--;
    $(".s_p input").val(num);
    $(".detail span").text(price*num);
}
})
</script>
</body>
</html>