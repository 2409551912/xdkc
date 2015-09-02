<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <style type="text/css">
    table tr td{width: 100px;text-align: center;font-size: 13px;line-height: 15px;}
    a:link,a:visited{
      color:#031bc1;
    }
    .page{width:99%;text-align:center;position: absolute;bottom: 10px;}
    </style>
    </head>
    <body>
        <table>
        <th>下单时间</th><th>订单号</th><th>商品名</th><th>单价</th><th>数量</th><th>总价</th><th></th>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><tr>
              <td><?php echo ($vo["order_time"]); ?></td>
              <td><?php echo ($vo["order_id"]); ?></td>
              <td><?php echo ($vo1["goods_name"]); ?></td>
              <td><?php echo ($vo1["goods_price"]); ?></td>
              <td><?php echo ($vo["order_goods_amount"]); ?></td>
              <td><?php echo ($vo["total_price"]); ?></td>
              <?php if($vo["order_status"] == 0 ): ?><td><a href='/xdkc/admin.php/Home/Order/status/order_id/<?php echo ($vo["order_id"]); ?>'>发货</a></td>
                <?php elseif($vo["order_status"] == 1): ?><td>已发货</td>
                <?php else: ?><td>交易成功</td><?php endif; ?>

              <!-- <td>
                <a href='/xdkc/admin.php/Home/Order/status/order_id/<?php echo ($vo["order_id"]); ?>'>发货</a>
              </td> -->
            </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
      </table>
      <div class="page"><?php echo ($page); ?></div>
    </body>
</html>