<?php
 session_start();
 $profile = $_POST;

 $_SESSION['profiles'][] = $profile;
 header('Location: profile_list.php');
 ?>
