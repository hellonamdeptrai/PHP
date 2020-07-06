<?php 
  session_start();
    if (!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true) {
        header("Location: ../login.php");
    }
    
  require_once('../../connection.php');

  //category
  //Câu lệnh truy vấn
  $query_category = "SELECT * FROM categories";

  //Thực thi câu lệnh
  $result_cate = $conn->query($query_category);

  //Tạo ra một bảng chứa dữ liệu
  $categories = array();

  while ($row = $result_cate->fetch_assoc()) {
    $categories[] = $row;
  }
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
    <h3 align="center">Update Category</h3>
    <hr>
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
          <strong>Thông báo</strong> Thêm mới không thành công !!!
        </div>
    <?php } ?>
        <form action="post_add_action.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Contents</label>
                <textarea class="form-control" id="" placeholder="" name="contents" rows="8"></textarea>
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                	<?php foreach ($categories as $cate) { ?>
					<option value="<?= $cate['id'] ?>"><?= $cate['title'] ?></option>
					<?php } ?>
			</select>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
             <div class="form-group">
                <label for="">Hiện thị bài viết</label>
                <input type="checkbox" id="" placeholder="" value="1" name="status"> <em>(Check để hiện thị bài viết)</em>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>