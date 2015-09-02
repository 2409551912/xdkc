<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <style>
    table tr td{font-size: 13px;width:200px;text-align: center;}
    a:link,a:visited{color:#031bc1;}
    </style>
	</head>
	<body>
    <table>
        <th>账号</th>
        <th>同户名</th>
        <th>联系方式</th>
        <th>联系地址</th>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["user_account"]); ?></td>
            <td><?php echo ($vo["user_nickname"]); ?></td>
            <td><?php echo ($vo["user_phone"]); ?></td>
            <td><?php echo ($vo["user_address"]); ?></td>
            <td><a href='/xdkc/admin.php/Home/User/delete/user_account/<?php echo ($vo["user_account"]); ?>'>删除</a></td>
        <tr><?php endforeach; endif; else: echo "" ;endif; ?>
        <?php echo ($page); ?>
    <table>
</body>
</html>