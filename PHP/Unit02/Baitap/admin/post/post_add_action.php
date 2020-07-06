<?php 
	session_start();
    if (!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true) {
        header("Location: ../login.php");
    }
    
	require_once('../../connection.php');

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$target_dir = "../../img/";
	$thumbnail = "";

	$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

	$status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

	if ($status_upload) { // nếu upload file không có lỗi 
	    $thumbnail = basename( $_FILES["thumbnail"]["name"]);
	}

	$title = $_POST['title'];
	$description = $_POST['description'];
	$contents = $_POST['contents'];
	$status = $_POST['status'];
	$category_id = $_POST['category_id'];
	$authors_id = 1;
	$created_at = date('Y-m-d H:i:s');

	$query = "INSERT INTO posts(title,description,contents,thumbnail,category_id,authors_id,status,created_at) VALUES ('".$title."','".$description."','".$contents."','".$thumbnail."','".$category_id."','".$authors_id."','".$status."','".$created_at."')";

	$status1 = $conn->query($query);

	if ($status1 == true) {
		setcookie('msg','Thêm mới thành công',time()+5);
		header('Location: posts.php');
	} else {
		setcookie('msg','Thêm mới không thành công',time()+5);
		header('Location: post_add.php');
	}
	

?>