<?php
  session_start();
  $check ='';
  if(isset($_SESSION['products'])){
    $check = $_SESSION['products'];
    unset($_SESSION['products']);
  }
  require_once "PHP/connect_data.php";
  $query = "SELECT * FROM categories";
  $result = $conn->query($query);
  $categories = array();

  while($row = $result->fetch_assoc()) {
	$categories[] = $row;
}

 ?>
 <?php include_once ('header.php'); ?>

    <div class="container">
      <div id="toast"></div>
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="add_categories.php" class="btn btn-primary">Tạo bài viết</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <?php foreach ($categories as $cate) {?>
            <tr>
                <td><?= $cate['id'] ?></td>
                <td><?= $cate['cate_name']  ?></td>
                <td>
                    <img src="<?= $cate['url_thumb']  ?>" width="100px" height="100px">
                </td>
                <td><?= $cate['description']  ?></td>
                <td>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="update_categories.php?id=<?= $cate['id'] ?>" class="btn btn-success">Chỉnh sửa</a>
                    <a href="#" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
          <?php } ?>
        </table>
    </div>
    <script type="text/javascript" src="JS/toast.js"></script>
    <script type="text/javascript">
      <?php echo $check; ?>
    </script>
<?php include_once ('footer.php'); ?>
