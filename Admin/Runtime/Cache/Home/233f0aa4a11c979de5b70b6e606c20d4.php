<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <style>
    table{text-align: center;font-size: 14px;}
        td{width:150px;}
        td.first{width: 10px;}
    </style>
	</head>
	<body>
    <p>所属类：<?php echo ($category_name); ?></p>
    <table>
        <tr>
            <td>商品号</td><td>商品名</td><td>价格</td>
        </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td class="first"><?php echo ($vo["goods_id"]); ?></td>
            <td><?php echo ($vo["goods_name"]); ?></td>
            <td><?php echo ($vo["goods_price"]); ?></td>
        <tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</body>
</html>