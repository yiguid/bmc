<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>方法测试页面</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>
<body>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$this->load->view('head');
?>

<div id="container">
	<h1>测试结果</h1>
	<code><?php echo $result;?></code>
	<div id="body">
		<form action='' method='post'>
			<input type="text" name="pageString"/>
			<input type="submit" value="提交"/>
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>