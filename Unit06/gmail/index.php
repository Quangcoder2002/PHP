<?php //include 'sendemail.php'; ?>
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
  </head>
  <body>
<div class="container">


          <!--Section: Contact v.2-->
      <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">GỬI MAIL</h2>
        <!--Section description-->

        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="sendEmail.php" method="POST">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <input type="text" id="subject" name="subject" class="form-control">
                              <label for="subject" class="">Tiêu đề</label>
                          </div>
                      </div>
                  </div>
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Tên người gửi</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Email người nhận</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->

                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Lời nhắn</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                    <div class="text-center text-md-left">
                        <input type="submit" value="Send" name="submit" class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">
                    </div>
                </form>

                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->

            <!--Grid column-->

        </div>

      </section>
      <!--Section: Contact v.2-->
</div>



  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <script type="text/javascript">
  if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
  }
  </script>
  </body>
</html>
