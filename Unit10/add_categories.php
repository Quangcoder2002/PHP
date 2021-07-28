
<?php include_once "header.php" ?>
<body>
    <div class="container">
    <h3 align="center"></h3>
    <h3 align="center">Add New Category</h3>
    <hr>
        <form action="PHP/add_category.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <input type="submit" class="btn btn-primary" name="" value="Tạo">
        </form>
    </div>
</body>
</html>
<?php include_once ('footer.php'); ?>
