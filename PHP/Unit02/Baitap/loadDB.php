<?php
	// Kết nối với CSDL
	$servername = "localhost"; //Địa chỉ id máy chủ CSDL

	$username = "root"; //Tên đăng nhập

	$password = ""; //Mật khẩu

	$dbname = "blogs"; //Tên CSDL muốn kết nối đến

	//Tạo kết nối đến CSDL
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Câu lệnh truy vấn
	$query = "SELECT * FROM posts";

	//Thực thi câu lệnh
	$result = $conn->query($query);

	//Tạo ra một bảng chứa dữ liệu
	$categories = array();

	while ($row = $result->fetch_assoc()) {
		$categories[] = $row;
	}

	foreach ($categories as $case) {
		echo "<pre>";
			print_r($case);
		echo "</pre>";
	}
?>