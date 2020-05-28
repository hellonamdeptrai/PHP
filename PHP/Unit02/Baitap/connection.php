<?php
	// Kết nối với CSDL
	$servername = "localhost"; //Địa chỉ id máy chủ CSDL

	$username = "root"; //Tên đăng nhập

	$password = ""; //Mật khẩu

	$dbname = "blogs"; //Tên CSDL muốn kết nối đến

	//Tạo kết nối đến CSDL
	$conn = new mysqli($servername, $username, $password, $dbname);
?>