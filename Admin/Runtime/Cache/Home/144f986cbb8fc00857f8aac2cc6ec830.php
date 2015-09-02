<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
  <style>
  table{margin: 0 auto;margin-top: 50px;}
    tr td{font-size: 13px;line-height: 40px;}
    a:link,a:visited{color: #031bce;}
  </style>
	</head>
	<body>
    <form action="/xdkc/admin.php/Home/Goods/add" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td>&nbsp;&nbsp;商品号：<input type="text" name="goods_id"><td>
      </tr>
      <tr>
        <td>商品种类：<select name="category_id">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["category_id"]); ?>"><?php echo ($vo["category_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          </select></td>
      </tr>
      <tr>
        <td>商品名称：<input type="text" name="goods_name"></td>
      </tr>
      <tr>
        <td>商品价格：<input type="text" name="goods_price"></td>
      </tr>
      <tr>
        <td>&nbsp&nbsp商品图：<input type="file" name="goods_img"></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="提交" name="goods_add"></td>
      </tr>
    </table>
  </form>
</body>
</html>