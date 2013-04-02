

function deletebmjc(url, id){
	$.post(url + "ajax/deletebmjc", {
		id : id
	}, function(data) {
		if (data == "1")
			alert("删除成功");
			location.reload();
	});
}

function warningChange(){
	alert("请勿修改此项！");
}