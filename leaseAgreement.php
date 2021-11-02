
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
<link href="css/login.css" rel="stylesheet" />
  <title>UTHNK</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
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
                  <a class="mr-4" href="adminLogin.php">
                    Admin Login
                  </a>
                  <a class="" href="index.html">
                    Log-out
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
              <h1>
                <span> UTHNK</span> <br>
                STUDENT RESIDENT <br>
                SYSTEM
              </h1>
              <p>
                Find the an affordable and comfortable room, Perfect for hardworking students.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- end find section -->




  <!-- end about section -->

  <!-- sale section -->

  <section class="sale_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="heading_container">
        <br>
        <h2>
          Lease Agreement
        </h2>
        <p>
          Please sign the lease agreement if want to secure the room.
        </p>
      </div>
      <div class="sale_container">
        <?php

include 'phpScripts/db_connection.php';
$conn = OpenCon();

  $id = $_GET['id'];
$sql = "SELECT * FROM rooms WHERE room_id = '$id'  ";

$result = $conn->query($sql);
//Store the results in an array
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
  $arr[] = $row;

   foreach ($arr as $row){
}

          ?>
        <div class="box">
          <div class="img-box">
            <img src="phpScripts/upload/<?php echo  $row['pic']; ?>" alt="">
          </div>
          <div class="detail-box">
           <div class="row">
             <h6>
              <?php echo  $row['location']; ?>
            </h6>

            <div class="ml-auto mr-3">
             <h6>    R<?php echo  $row['price']; ?>    </h6>
            </div>

           </div>

            <p>
              <?php echo  $row['description']; ?>
            </p>

                      <div id="card" style="width:100%">
                        <div id="card-content">
                            <div id="card-title">
                              <h1>
                                <span> UTHNK</span> <br>

                              </h1>
                             <h2>    Lease Agreement</h2>

                               </div>
                        <form method="post" action="phpScripts/sendRequest.php" class="form">

                       Thank you for taking interest in the room, please note the follow as the Terms and Conditions of the room.
                       the price of the room is R<?php echo  $row['price']; ?> Per month. <br><br> A R1000 deposit must be paid to fully secure the room. The room is located at:  <?php echo  $row['location']; ?>.
                        The landlord of this room will be UTHNK, any problems with room will be addressed to UTHINK.
                        </h6>
                       </label>
                       <label for="user-email" style="padding-top:13px">
                    &nbsp;Tenant Name
                    </label>
                    <input style="margin-top:-12px" id="name" class="form-content" type="text" name="name" autocomplete="on" required />
                    <div class="form-border"></div>

                    <label for="user-email" style="padding-top:13px">
                 &nbsp;Tenant Phone
                 </label>
                 <input style="margin-top:-12px" id="phone" maxlength="10" class="form-content" type="phone" name="phone" autocomplete="on" required />
                 <div class="form-border"></div>

                    <label for="user-password" style="padding-top:22px">&nbsp;When do you want to move in
                    </label>
                    <input  style="margin-top:-12px" id="date" class="form-content" type="date" name="date" min="<?= date('Y-m-d'); ?>" required />
                    <div class="form-border"></div>
                    <input  id="address" class="form-content" type="text" name="address" hidden value="<?php echo  $row['location']; ?>" />
                    <input  id="price" class="form-content" type="text" name="price" hidden value="<?php echo  $row['price']; ?>" />
              
                    <a href="#">

                    </a>
                    <input id="submit-btn" type="submit" name="submit" value="SIGN LEASE" />

                    </form>
                    </div>
                    </div>
          </div>

        </div>
      <?php } ?>


      <div class="btn-box">

      </div>
    </div>
  </section>

  <!-- end sale section -->


  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>
