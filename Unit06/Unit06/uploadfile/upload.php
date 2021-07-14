<?php
  if ($_SERVER['REQUEST_METHOD'] !== 'POST')
  {

      echo "Phải Post dữ liệu<br>";
      die;
  }


  if (!isset($_FILES["fileupload"]))
  {
      echo "Dữ liệu không đúng cấu trúc<br>";
      die;
  }


  if ($_FILES["fileupload"]['error'] != 0)
  {
    echo "Dữ liệu upload bị lỗi<br>";
    die;
  }


  $target_dir    = "file/";

  $target_file   =  $target_dir . basename($_FILES["fileupload"]["name"]);

  $allowUpload   = true;


  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


  $maxfilesize   = 800000;


  $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');


  if(isset($_POST["submit"])) {

      $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
      if($check !== false)
      {
          echo "Đây là file ảnh - " . $check["mime"] . ".<br>";
          $allowUpload = true;
      }
      else
      {
          echo "Không phải file ảnh.";
          $allowUpload = false;
      }
  }


  if (file_exists($target_file))
  {
      echo "Tên file đã tồn tại trên server, không được ghi đè<br>";
      $allowUpload = false;
  }

  if ($_FILES["fileupload"]["size"] > $maxfilesize)
  {
      echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
      $allowUpload = false;
  }



  if (!in_array($imageFileType,$allowtypes ))
  {
      echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
      $allowUpload = false;
  }


  if ($allowUpload)
  {
      if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file))
      {
          echo "File ". basename( $_FILES["fileupload"]["name"]).
          " Đã upload thành công.";

          echo "File lưu tại " . $target_file;

      }
      else
      {
          echo "Có lỗi xảy ra khi upload file.";
      }
  }
  else
  {
      echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
  }
?>
