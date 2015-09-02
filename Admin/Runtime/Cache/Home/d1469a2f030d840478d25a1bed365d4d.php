<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
  <style type="text/css">
  table.show{position:absolute;display:block;width:740px;margin: 0 auto;height: 92%;}
  .show tr td{
      width:180px;
      font-size: 14px;
      text-align: center;
    }
  .show a:link,a:visited{
      color:#031bc1;
      text-align: center;
    }
  .add_view{width:100%;height:7%;padding-top:1%;background: #9b9b9b;position: absolute;bottom: 0px;left: 0px;}
  .add_view form{width:600px;margin: 0 auto;}
 </style>
	</head>
	<body>
      <table class="show">
      <tr><td>类别名</td></tr>
      <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($vo["category_id"]); echo ($vo["category_name"]); ?></td>
        <td>
            <a href='/xdkc/admin.php/Home/Category/delete/category_id/<?php echo ($vo["category_id"]); ?>' class="delete">删除</a>
        </td>
        <td>
            <a href='/xdkc/admin.php/Home/Category/edit_view/category_id/<?php echo ($vo["category_id"]); ?>'>编辑</a>
        </td>
        <td>
            <a href='/xdkc/admin.php/Home/Category/consult/category_id/?category_id=<?php echo ($vo["category_id"]); ?>'>查看</a>
        </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>
      <div class="add_view"> 
          <form action="/xdkc/admin.php/Home/Category/add" method="post">
          <table>
              <tr>
                  <td>类别序号：<input type="text" name="category_id"></td>
                  <td>类别名称：<input type="text" name="category_name"></td>
                  <td class="sub">&nbsp;<input type="submit" value="添加"></td>
              </tr>
          </table>
          </form>
      </div>
	</body>
  <script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
  <script type="text/javascript" src="/xdkc/Public/js/touch.min.js"></script>
  <script>
    $(".delete").click(function(){
              return confirm("确定要删除吗");
    })
  </script>
</html>