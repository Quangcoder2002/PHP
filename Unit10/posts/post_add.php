<?php
require_once('connection.php');

$sql = "SELECT * FROM categories";

$result = $conn->query($sql);

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
     <h3 align="center">Add New POSTS</h3>
     <hr>
         <form action="post_add_process.php" method="POST" role="form" enctype="multipart/form-data">
             <div class="form-group">
                 <label for="">Tiêu đề</label>
                 <input type="text" class="form-control" id="" placeholder="" name="name">
             </div>
             <div class="form-group">
                 <label for="">Mô tả</label>
                 <input type="text" class="form-control" id="" placeholder="" name="description">
             </div>
             <div class="form-group">
                 <label for="">Ảnh</label>
                 <input type="file" class="form-control" id="" placeholder="" name="Avatar">
             </div>
             <div class="form-group">
                 <label for="">Danh mục: </label>
                 <select name="category" id="">
                   <?php foreach ($categories as $cate) { ?>
                   <option value="<?= $cate['id']; ?>"> <?= $cate['cate_name']; ?></option>
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
