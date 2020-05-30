<?php 
	require_once('../../connection.php');

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$target_dir = "../../img/";
	$thumbnail = "";

	$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

	$status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

	if ($status_upload) { // nếu upload file không có lỗi 
	    $thumbnail = ",thumbnail = '". basename( $_FILES["thumbnail"]["name"]."'");
	}

	$id = $_POST['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$contents = $_POST['contents'];
	$status = $_POST['status'];
	$category_id = $_POST['category_id'];
	$authors_id = 1;
	$created_at = date('Y-m-d H:i:s');

	$query = "UPDATE posts SET title ='".$title."', description = '".$description."', contents ='".$contents."', status ='".$status."', category_id = ".$category_id.$thumbnail.", authors_id ='".$authors_id."', created_at ='".$created_at."' WHERE id =".$id;

	$status1 = $conn->query($query);

	if ($status1 == true) {
		setcookie('msg','Sửa thành công',time()+5);
		header('Location: posts.php');
	} else {
		setcookie('msg','Sửa không thành công',time()+5);
		header('Location: post_edit.php');
	}
	

?>