<?php 
	require_once('../../connection.php');

	$id = $_GET['id'];
	//category
	//Câu lệnh truy vấn
	$query_author = "SELECT * FROM authors where id = ".$id;

	//Thực thi câu lệnh
	$author = $conn->query($query_author)->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Category Detail</h3>
    <hr>
    <h2>Name: <?= $author['name'] ?></h2>
    <h2>Email: <?= $author['email'] ?></h2>
    <h2>Password: <?= $author['password'] ?></h2>
    <h2>Status: <?php
        if ($author['status'] == 1) {
            echo "Hoạt động";
        } else {
            echo "Ngừng hoạt động";
        }
        
    ?></h2>
    </div>
</body>
</html>