<?php
require_once('connection.php');

$sql = "SELECT posts.*, categories.cate_name FROM categories INNER JOIN posts ON posts.category_id = categories.id";

$result = $conn->query($sql);

$posts = array();

while($row = $result->fetch_assoc()) {
	$posts[] = $row;
}
//echo "<pre>";
//print_r($posts);
//echo "</pre>";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>POSTS</title>
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
         <h3 class="text-center">--- POSTS ---</h3>
         <a href="post_add.php" class="btn btn-primary">Add New Posts</a>
         <table class="table">
             <thead>
                 <th>ID</th>
                 <th>Nội dung</th>
                 <th>Ảnh</th>
                 <th>Mô tả</th>
                 <th>Danh mục</th>
                 <th>Action</th>
             </thead>
             <?php foreach ($posts as $post) { ?>
             <tr>
                 <td><?= $post['id']; ?></td>
                 <td><?= $post['title'] ?></td>
                 <td>
                     <img src="<?= $post['thumbnail'] ?>" width="100px" height="100px">
                 </td>
                 <td><?= $post['short_content'] ?></td>
                 <td><?= $post['cate_name'] ?></td>
                 <td>
                     <a href="post_detail.php?id=<?= $post['id']; ?>" class="btn btn-primary">Detail</a>
                     <a href="post_edit.php?id=<?= $post['id']; ?>" class="btn btn-success">Edit</a>
                     <a href="post_delete.php?id=<?= $post['id']; ?>" class="btn btn-danger">Delete</a>
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
