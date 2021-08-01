<?php
require_once('connection.php');
$id = isset($_GET['id'])?$_GET['id']:0;
$sql = "SELECT * FROM posts WHERE id =".$id;

$post = $conn->query($sql)->fetch_assoc();
$sql1 = "SELECT * FROM categories ";
$result = $conn->query($sql1);
$categories = array();

while($row = $result->fetch_assoc()) {
	$categories[] = $row;
}
 ?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>DevMind - Education And Technology Group</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<!-- Google Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
		<!-- Bootstrap core CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
		<div class="container">
		<h3 align="center">UPDATE POST</h3>
		<hr>
				<form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
						<div class="form-group">
								<label for="">Name</label>
								<input type="hidden" name="id" value="<?= $post['id'] ?>">
								<input type="text" class="form-control" id="" placeholder="<?= $post['title'] ?>" name="name">
						</div>
						<div class="form-group">
								<label for="">Description</label>
								<input type="text" class="form-control" id="" placeholder="<?= $post['short_content'] ?>" name="description">
						</div>
						<div class="form-group">
								<label for="">Avatar</label>
								<input type="file" class="form-control" id="" placeholder="<?= $post['thumbnail'] ?>" name="Avatar">
						</div>
						<div class="form-group">
								<label for="">Danh mục</label>
                <select name="category" id="">
                  <?php foreach ($categories as $cate) { ?>
                  <option <?php if ($cate['id'] == $post['category_id']) {echo "selected";} ?> value="<?= $cate['id']; ?>"> <?= $cate['cate_name']; ?></option>
                  <?php } ?>
                </select>
						</div>
						<button type="submit" class="btn btn-primary">Create</button>
				</form>
		</div>
		<!-- JQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>
