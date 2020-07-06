<?php 
	session_start();
    if (!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true) {
        header("Location: ../login.php");
    }
    
	require_once('../../connection.php');

	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$status = $_POST['status'];

	$query = "UPDATE authors SET name ='".$name."', email = '".$email."', password = '".$password."', status = '".$status."' WHERE id =".$id;

	$status = $conn->query($query);

	if ($status == true) {
		setcookie('msg','Cập nhật thành công',time()+5);
		header('Location: authors.php');
	} else {
		setcookie('msg','Cập nhật không thành công',time()+5);
		header('Location: author_edit.php?id='.$id);
	}
	

?>