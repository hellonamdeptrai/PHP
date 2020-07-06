<?php 
    session_start();
    if (!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true) {
        header("Location: ../login.php");
    }
    
    require_once('../../connection.php');

    $id = $_GET['id'];
    //authors
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
    <h3 align="center">Update Authors Information</h3>
    <hr>
        <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
          <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
        <?php } ?>
        <form action="author_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $author['id'] ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" value="<?= $author['name'] ?>" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" value="<?= $author['email'] ?>" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" value="<?= $author['password'] ?>" placeholder="" name="password">
            </div>
            <div class="form-group">
                <label for="">Trạng thái hoạt động</label>
                <input <?= ($author['status'] == 1)?'checked':'' ?> type="checkbox" id="" placeholder="" value="1" name="status"> <em>(Check để hoạt động tài khoản)</em>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>