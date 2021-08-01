<?php
require_once('connection.php');
$id = isset($_GET['id'])?$_GET['id']:0;
$sql = "SELECT * FROM categories WHERE id =".$id;

$category = $conn->query($sql)->fetch_assoc();
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
		<h3 align="center">Add New Category</h3>
		<hr>
				<form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
						<div class="form-group">
								<label for="">Name</label>
								<input type="hidden" name="id" value="<?= $category['id'] ?>">
								<input type="text" class="form-control" id="" placeholder="<?= $category['cate_name'] ?>" name="name">
						</div>
						<div class="form-group">
								<label for="">Description</label>
								<input type="text" class="form-control" id="" placeholder="<?= $category['description'] ?>" name="description">
						</div>
						<div class="form-group">
								<label for="">Avatar</label>
								<input type="file" class="form-control" id="" placeholder="<?= $category['cate_avatar'] ?>" name="Avatar">
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
