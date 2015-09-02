<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <style>
  table{margin: 0 auto;margin-top: 80px;}
  tr td{font-size: 16px;line-height: 60px;}
  </style>
  </head>
  <body>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action='/xdkc/admin.php/Home/Goods/edit/goods_id/<?php echo ($vo["goods_id"]); ?>' method='post'>
      <table>
        <tr>
          <td>商品编号：</td>
          <td><input type='text' value='<?php echo ($vo["goods_id"]); ?>' name='goods_id'></td>
        </tr>
        <tr>
          <td>商品名称：</td>
          <td><input type='text' value='<?php echo ($vo["goods_name"]); ?>' name='goods_name'></td>
        </tr>
        <tr>
          <td>商品价格：</td>
          <td><input type='text' value='<?php echo ($vo["goods_price"]); ?>' name='goods_price'></td>
        </tr>
        <tr>
          <td><input type='submit' value='修改'></td>
          <td>&nbsp;</td>
        </tr>
        </table>
      </form><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>