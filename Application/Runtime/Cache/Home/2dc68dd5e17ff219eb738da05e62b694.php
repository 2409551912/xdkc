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
<body class="host_body">
  <div class="host">
      <div class="top"><p class="me">我的</p></div>
      <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="host_message" href="/xdkc/index.php/Home/User/user">
          <p><?php echo ($vo["user_nickname"]); ?></p>
          <p><?php echo ($vo["user_phone"]); ?></p>
          <span>》</span>
      </a><?php endforeach; endif; else: echo "" ;endif; ?>
      <a class="service" href="tel:18332537622">
          <p>客服电话</p>
          <span>》</span>
      </a>
      <div class="indent">
          <p>我的订单</p>
      </div>
      <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if(is_array($vo1['voo'])): $i = 0; $__LIST__ = $vo1['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$price): $mod = ($i % 2 );++$i;?><div class='indent_message'>
          <div class='goods'>
              <img src='/xdkc/Public/<?php echo ($price["goods_pic"]); ?>'>
              <ul>
                  <li><?php echo ($price["goods_name"]); ?></li>
               
                  <li>单价：￥<?php echo ($price["goods_price"]); ?></li>
          
                  <li>数量：<?php echo ($vo1["order_goods_amount"]); ?></li>
              </ul>
              <!-- <div class='count'>
                  <p class='time'>
                  <?php echo ($vo1["order_time"]); ?>
                  </p>
                  <p class='total'>总计：<span>￥<?php echo ($price["0"]); ?></span></p>
                  
              </div> -->
              <ul class= "count">
                  <li class="time"><?php echo ($vo1["order_time"]); ?></li>
               
                  <li class="total">总计：<span>￥<?php echo ($price["0"]); ?></li>
              
                  <li class="status">
                    <?php if($vo1["order_status"] == 0): ?>尚未发货
                      <?php elseif($vo1["order_status"] == 1): ?>
                        <a href = "/xdkc/index.php/Home/Order/status/order_id/<?php echo ($vo1["order_id"]); ?>" class="affirm">确认收货</a>
                      <?php else: ?>交易成功<?php endif; ?>
                  </li>
              </ul>
          </div>
      </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
  </div>
<script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/touch.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/idangerous.swiper.min.js"></script>
</body>
</html>