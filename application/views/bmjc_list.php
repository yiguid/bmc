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
	<h1>查看检查记录</h1>
	<div id="body">
		<table class="list">
			<tr>
				<td>ID</td>
				<td>时间</td>
				<td>地点</td>
				<td>被检查人</td>
				<td>检查标准</td>
				<td>详细情况</td>
				<td>状态</td>
				<td>备注</td>
				<td>编辑</td>
				<td>删除</td>
			</tr>
		<?php foreach($bmjc_list as $bmjc):?>  
				<tr class="<?php echo $bmjc->status;?>">
					<td><?php echo $bmjc->id?></td>
					<td><?php echo $bmjc->time?></td>
					<td><?php echo $bmjc->department?></td>
					<td><?php echo $bmjc->people?></td>
					<td><?php echo $bmjc->ruleids?></td>
					<td><?php echo $bmjc->detail?></td>
					<td><?php echo $bmjc->status?></td>
					<td><?php echo $bmjc->remark;?></td>
					<td><a href="<?php echo base_url();?>/bmjc/edit_bmjc/<?php echo $bmjc->id;?>" />编辑</a></td>
					<td><a href="javascript:deletebmjc('<?php echo base_url();?>', '<?php echo $bmjc->id;?>')" />删除</a></td>
				</tr>
		<?php endforeach;?>
		</table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>