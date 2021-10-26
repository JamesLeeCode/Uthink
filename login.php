<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>UThink</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
   <style> #toast-container > .toast-error { background-color: #BD362F; } </style>
</head>

<body>
  <?php
if (isset($_GET['statusRegister'])) {
 echo '<script type="text/javascript">toastr.error("You have been registered on system, please login", "You Have Registered") </script>';
  }

  if (isset($_GET['status'])) {

   echo '<script type="text/javascript">toastr.error("Please check your login details and try again", "Incorrect Details Entered") </script>';
    }
 ?>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">

          </a>
          <div class="navbar-collapse" id="">
            <ul class="navbar-nav justify-content-between ">
              <div class="User_option">
                <li class="">
                  <a class="mr-4" href="">
                    Login
                  </a>
                  <a class="" href="registerUser.php">
                    Sign up
                  </a>
                </li>
              </div>
            </ul>

          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 offset-md-1">
            <div class="detail-box">

              <div id="card">
                <div id="card-content">
                    <div id="card-title">
                      <h1>
                        <span> UTHNK</span> <br>

                      </h1>
                     <h2>LOGIN</h2>

                       </div>
                <form method="post" class="form">
               <label for="user-email" style="padding-top:13px">
            &nbsp;Email
            </label>
            <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Password
            </label>
            <input id="user-password" class="form-content" type="password" name="password" required />
            <div class="form-border"></div>
            <a href="#">
            <legend id="forgot-pass">Forgot password?</legend>
            </a>
            <input id="submit-btn" type="submit" name="submit" value="LOGIN" />

            </form>
            </div>
            </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>


  <!-- find section -->
  <!-- end sale section -->

  <!-- price section -->



  <!-- info section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>
