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
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.jpg" alt="" />
          </a>
          <div class="navbar-collapse" id="">
            <ul class="navbar-nav justify-content-between ">
              <div class="User_option">
                <li class="">
                  <a class="mr-4" href="login.php">
                    Login
                  </a>
                  <a class="" href="">
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
                     <h2>SIGN UP</h2>

                       </div>
                <form method="post" action="phpScripts/registerUser.php"  class="form">
                  <label for="names" style="padding-top:13px"> &nbsp;Full Names </label>
                  <input id="fullNames" class="form-content" type="text" name="fullNames" required />
                    <div class="form-border"></div>
               <label for="user-email" style="padding-top:13px">
            &nbsp;Email
            </label>
            <input id="email" class="form-content" type="email" name="email" autocomplete="on" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Password
            </label>
            <input id="password" class="form-content" type="password" name="password" required />

            <div class="form-border"></div>

            <input id="submit-btn" type="submit" name="submit" value="SIGN UP" />

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
