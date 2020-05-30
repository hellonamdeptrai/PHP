<?php 
	require_once('../../connection.php');

	$id = $_GET['id'];
	//category
	//Câu lệnh truy vấn
	$query_post = "SELECT * FROM posts where id = ".$id;

	//Thực thi câu lệnh
	$post = $conn->query($query_post)->fetch_assoc();

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
    <h3 align="center">Post Detail</h3>
    <hr>
    <p><b>Trạng thái: </b><?php 
        if ($post['status'] == 1) {
            echo "Hoạt động";
        } else {
            echo "không hoạt động";
        }
        
    ?> </p>
    <h2>Title: <?= $post['title'] ?></h2>
    <h2>Description: <?= $post['description'] ?></h2>
    <h2><img width="100%" src="../../img/<?= $post['thumbnail'] ?>" alt=""></h2>
    <h2>Created_at: <?= $post['created_at'] ?></h2>
    <p><?= $post['contents'] ?></p>
    </div>
</body>
</html>