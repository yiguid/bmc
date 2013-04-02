<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>检查管理系统</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>
<body>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$this->load->view('head');
?>

<div id="container">
	<h1>添加检查记录</h1>
	<div id="body">
		<form action='<?php echo base_url();?>bmjc/add' method='post'>
		<code>检查时间：<input type='text' name='time' /></code>
		<code>院系部门：<input type='text' name='department' /></code>
		<code>被检查人：<input type='text' name='people' /></code>
		<code>对应标准：<input type='text' name='ruleids' /></code>
		<code>详细情况：<textarea name='detail'></textarea></code>
		<code>检查状态：<select name="status" id="status">
							<option>未检查</option>
							<option>待整改</option>
							<option>整改中</option>
							<option>已通过</option>
						</select>
		</code>
		<code>检查备注：<input type='text' name='remark' /></code>
		<code><input type='submit' value='保存'/><input type='reset' value='重置'/></code>
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>