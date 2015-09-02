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
    <form action="/xdkc/admin.php/Home/Category/add" method="post">
    <table>
      <tr>
        <td>类别序号：<input type="text" name="category_id"></td>
      </tr>
      <tr>
        <td>类别名称：<input type="text" name="category_name"></td>
      </tr>
      <tr><td class="sub">&nbsp;<input type="submit" value="添加"></td></tr>
    </table>
  </form>
</body>
</html>