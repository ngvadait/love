<?php 
	$user='';
	$pass='';
	$link=mysqli_connect('',$user,$pass,'');
	// Khai báo CSDL dùng loại nào
	mysqli_query($link,"SET character_set_results=utf8");
	mb_language('uni');
	mb_internal_encoding('UTF-8');
	// kết thúc khai báo
	// Khi thêm và cập nhật dữ liệu, trước khi tiến hành thực hiện câu truy vấn Insert hay Update bạn cần phải cho csdl biết loại dữ liệu mà bạn muốn lưu trữ bằng 2 câu lệnh sau:
	mysqli_query($link,"SET character_set_client=utf8");
	mysqli_query($link,"SET character_set_connection=utf8");
	// khi bạn cần tìm kiếm hay truy vấn dữ liệu, ta chỉ cho csdl biết loại dữ liệu mà bạn cần sử dụng:
	mysqli_query($link,"SET character_set_results=utf8");
	mysqli_select_db($link,'');
?>