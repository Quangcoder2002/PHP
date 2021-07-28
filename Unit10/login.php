<?php include_once "header.php"; ?>
<!-- Default form login -->
<div class="container" style="width:26%; margin-top: 5%;">
  <form class="text-center border border-light p-5" action="PHP/login_run.php">

      <p class="h4 mb-4">Sign in</p>

      <!-- Email -->
      <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Username">

      <!-- Password -->
      <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

      <input type="submit" name="" class="btn btn-info btn-block my-4" value="Đăng nhập">
  </form>
  <!-- Default form login -->
</div>
<?php include_once "footer.php" ?>
