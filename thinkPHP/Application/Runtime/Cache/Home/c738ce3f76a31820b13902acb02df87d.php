<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width target-densitydpi=device-dpi, initial-scale=1.0,maximum-scale=1.0,user-scalable=yes">
<link href="/thinkPHP/Public/css/bootstrap.min.css" rel="stylesheet">
<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<title>登录</title>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
<form class="form-horizontal" role="form" method="post" action="/thinkPHP/index.php/Home/Admin/login">
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">id</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="firstname" name="name"
            placeholder="请输入用户名" value="<?php echo ($name); ?>">
      </div>
   </div>
   <div class="form-group">
      <label for="lastname" class="col-sm-2 control-label">密码</label>
      <div class="col-sm-10">
         <input type="password" class="form-control" id="lastname" name="password"
            placeholder="请输入密码" value="<?php echo ($password); ?>">
      </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-default" >登录</button>
      </div>
   </div>
</form>
 </div>
   </div>
   </div>
</body>
</html>