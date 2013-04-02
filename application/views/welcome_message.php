<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>检查管理系统</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>
<body>

<div id="container">
	<h1>检查管理系统</h1>

	<div id="body">
		<p>检查记录管理</p>
		<code><a href="bmjc/add_bmjc">添加检查记录</a> | <a href="bmjc">查看检查记录</a> | <a href="bmjc/stat">统计检查记录</a></code>

		<p>检查人员管理</p>
		<code><a href="people/add">添加人员信息</a> | <a href="people">查看人员信息</a> | <a href="people/stat">统计人员信息</a></code>

		<p>检查制度管理</p>
		<code><a href="rule/add">添加检查制度</a> | <a href="rule">查看检查制度</a> | <a href="rule/stat">统计检查制度</a></code>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>