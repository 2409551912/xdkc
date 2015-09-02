<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <style>
  table{margin: 0 auto;margin-top: 80px;}
    tr td{
      font-size: 16px;
      width:240px;
      text-align: center;
      line-height:60px;
       }
       .sub{text-align: left;}
  </style>
  </head>
  <body>
    <form action="/xdkc/admin.php/Home/Category/edit" method="post">
    <table>
      <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td>类别序号：<input type="text" name="category_id" value="<?php echo ($vo["category_id"]); ?>"></td>
      </tr>
      <tr>
        <td>类别名称：<input type="text" name="category_name" value="<?php echo ($vo["category_name"]); ?>"></td>
      </tr>
      <tr><td class="sub">&nbsp;<input type="submit" value="修改"></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
  </form>
</body>
</html>