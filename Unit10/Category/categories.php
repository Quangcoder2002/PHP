<?php
require_once('connection.php');

$sql = "SELECT * FROM categories";

$result = $conn->query($sql);

$categories = array();

while($row = $result->fetch_assoc()) {
	$categories[] = $row;
}
echo "<pre>";
print_r($categories);
echo "</pre>";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>CATEGORIES</title>
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
         <h3 class="text-center">--- CATEGORIES ---</h3>
         <a href="category_add.php" class="btn btn-primary">Add New Category</a>
         <table class="table">
             <thead>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Thumbnail</th>
                 <th>Description</th>
                 <th>Action</th>
             </thead>
             <?php foreach ($categories as $cate) { ?>
             <tr>
                 <td><?= $cate['id']; ?></td>
                 <td><?= $cate['cate_name'] ?></td>
                 <td>
                     <img src="<?= $cate['cate_avatar'] ?>" width="100px" height="100px">
                 </td>
                 <td><?= $cate['description'] ?></td>
                 <td>
                     <a href="category_detail.php?id=<?= $cate['id']; ?>" class="btn btn-primary">Detail</a>
                     <a href="category_edit.php?id=<?= $cate['id']; ?>" class="btn btn-success">Edit</a>
                     <a href="category_delete.php?id=<?= $cate['id']; ?>" class="btn btn-danger">Delete</a>
                 </td>
             </tr>
           <?php } ?>
         </table>
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
