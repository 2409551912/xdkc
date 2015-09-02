<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <style type="text/css">
      table{margin: 0 auto;}
      tr td{font-size: 14px;width: 180px;text-align: center;}
      a:link,a:visited{color:#031bce;} 
  </style>
  </head>
  <body>
          <p>所属类:
            <select id="sec">
              <option value ="">请选择</option>
              <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo0): $mod = ($i % 2 );++$i;?><option value ="<?php echo ($vo0["category_id"]); ?>"><?php echo ($vo0["category_name"]); ?>
                </option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
          </p>
    <table>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td class="first"><?php echo ($vo["goods_id"]); ?></td>
            <td><?php echo ($vo["goods_name"]); ?></td>
            <td><?php echo ($vo["goods_price"]); ?></td>
            <td><a href="/xdkc/admin.php/Home/Goods/edit_view/goods_id/<?php echo ($vo["goods_id"]); ?>">编辑</a></td>
            <td><a href="/xdkc/admin.php/Home/Goods/delete/goods_id/<?php echo ($vo["goods_id"]); ?>">删除</a></td>
        <tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
    <p id="haha"></p>
    <script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
    <script type="text/javascript" src="/xdkc/Public/js/touch.min.js"></script>
    <script>
        // var sec = document.getElementById("sec");
        // sec.onchange=function(){
        //   alert("fdskf");
        // }
        $("#sec").change(function(){
          var category_id = $(this).val();
          window.location="/xdkc/admin.php/Home/Goods/show/category_id/"+category_id;
        });
    </script>
  </body>
</html>