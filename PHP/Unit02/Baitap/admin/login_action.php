<?php 
	session_start();
	require_once('../connection.php');
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	//Lấy data
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT a.id,a.name FROM authors a where a.email = '".$email."' and a.password = '".md5($password)."' and a.status = 1";
	$author = $conn->query($query)->fetch_assoc();

	if ($author !== NULL) {
		$_SESSION['isLogin'] = true;
		$_SESSION['author'] = $author;
		header("Location: index.php");
	} else {
		setcookie('msg','Đăng nhập thất bại',time()+5);
		header("Location: login.php");
	}
	

?>