
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="CSS.css">
  </head>
  <body>
    <div class="container">
      <form action="upload.php" method="post" enctype="multipart/form-data">
    <!-- Upload Area -->
    <div>
      <h1>File upload progress</h1>
       <input type="file" name="fileupload" id="fileupload" >

      <div id="feedback">

      </div>

      <label id="progress-label" for="progress"></label>
      <progress id="progress" value="0" max="100"> </progress>
      <br>
      <input type="submit" value="Đăng ảnh" name="submit" class="btn btn-primary">
    </div>
    </form>
    <br>
    <?php session_start();
     if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==false) { ?>
        <div class="alert alert-danger" role="alert">
          <?php
            foreach ($_SESSION['upload_status'][1] as  $error) {
              echo "<p> - ".$error."</p>";
            }
            unset($_SESSION['upload_status']);
           ?>
        </div>
    <?php } ?>
    <?php if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==true) { ?>
        <div class="alert alert-success" role="alert">
            Đường đẫn file sau khi upload: <?= $_SESSION['upload_status'][1]; ?>
        </div>
        <?php
            unset($_SESSION['upload_status']);
        } ?>
    </div>

    <script type="text/javascript" src="JS.js"></script>
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
