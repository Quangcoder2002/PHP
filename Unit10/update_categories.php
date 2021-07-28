<?php include_once "header.php" ?>
<?php
require_once "PHP/connect_data.php";
$id = $_GET['id'];
 $query = "SELECT * from categories WHERE id = ". $id;
$category = $conn->query($query)->fetch_assoc();
  ?>
<body>
    <div class="container">
    <h3 align="center"></h3>
    <h3 align="center">Update Category</h3>
    <hr>
    <form action="PHP/update_categories.php?id=<?= $category['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $category['cate_name'] ?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $category['description'] ?>">
        </div>
        <input type="submit" class="btn btn-primary" name="" value="Update">
    </div>
</body>
</html>
<?php include_once ('footer.php'); ?>
