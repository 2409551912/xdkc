<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <style>
    table{margin: 0 auto;text-align: center;}
        td{width:180px;}
        td.first{width: 10px;}
    </style>
	</head>
	<body>
    <p>所属类：<?php echo ($category_name); ?></p>
    <table>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td class="first"><?php echo ($vo["goods_id"]); ?></td>
            <td><?php echo ($vo["goods_name"]); ?></td>
            <td><?php echo ($vo["goods_price"]); ?></td>
            <td><a href="/xdkc/admin.php/Home/Goods/edit_view/goods_id/<?php echo ($vo["goods_id"]); ?>">编辑</a></td>
            <td><a href="/xdkc/admin.php/Home/Goods/delete/goods_id/<?php echo ($vo["goods_id"]); ?>">删除</a></td>
        <tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</body>
</html>