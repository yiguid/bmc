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
	<h1>修改检查记录</h1>
	<div id="body">
		<form action='<?php echo base_url();?>bmjc/edit' method='post'>
		<input type="hidden" name='id' value="<?php echo $bmjcarr->id; ?>" />
		<code>检查时间：<input type='text' name='time' value="<?php echo $bmjcarr->time; ?>" /></code>
		<code>院系部门：<input type='text' name='department' value="<?php echo $bmjcarr->department; ?>" /></code>
		<code>被检查人：<input type='text' name='people' value="<?php echo $bmjcarr->people; ?>" /></code>
		<code>对应标准：<input type='text' name='ruleids' value="<?php echo $bmjcarr->ruleids; ?>" /></code>
		<code>详细情况：<textarea name='detail'></textarea></code>
		<code>检查状态：<select name="status" id="status">
							<option <?php if($bmjcarr->status == '未检查') echo ' selected = "selected"'; ?>>未检查</option>
							<option <?php if($bmjcarr->status == '待整改') echo ' selected = "selected"'; ?>>待整改</option>
							<option <?php if($bmjcarr->status == '整改中') echo ' selected = "selected"'; ?>>整改中</option>
							<option <?php if($bmjcarr->status == '已通过') echo ' selected = "selected"'; ?>>已通过</option>
						</select>
		</code>
		<code>检查备注：<input type='text' name='remark' value="<?php echo $bmjcarr->remark; ?>" /></code>
		<code><input type='submit' value='保存'/><input type='reset' value='重置'/></code>
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>