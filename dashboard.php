

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
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <title>UTHINK</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
   <style> #toast-container > .toast-error { background-color: #BD362F; } </style>
   <style> #toast-container > .toast-success  { background-color: #51a351; } </style>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <?php
if (isset($_GET['statusRegister'])) {
 echo '<script type="text/javascript">toastr.error("You have been registered on system, please login", "You Have Registered") </script>';
  }

  if (isset($_GET['send'])) {

   echo '<script type="text/javascript">toastr.success("Your request was send to admin and they will be in contact with you. Thank You", "Lease Agreement Submitted") </script>';
    }
 ?>
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

  <!-- find section -->
  <section class="find_section ">
    <div class="container">
      <form action="">
        <div class=" form-row">
          <div class="col-md-5">
            <label  for="user-password" style="padding-top:22px">&nbsp; Search for the location you want to stay in.
            </label>
          </div>
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Location ">
          </div>
          <div class="col-md-2">
            <button type="submit" class="">
              search
            </button>
          </div>
        </div>

      </form>
    </div>
  </section>

  <!-- end find section -->




  <!-- end about section -->

  <!-- sale section -->

  <section class="sale_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          Available Rooms
        </h2>
        <p>
          Please select the room that feels like home to you
        </p>
      </div>
      <div class="sale_container">
        <?php

include 'phpScripts/db_connection.php';
$conn = OpenCon();
if (!empty($_POST['location']))  {
  $location = $_POST['location'];
$sql = "SELECT * FROM rooms WHERE location LIKE '%$location%' AND status = 'open'";
}
else {
$sql = "SELECT * FROM rooms WHERE status = 'open'";
}

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
            <div style="margin-top:-45px" class="btn-box">
                <a href="leaseAgreement.php?id=<?php echo  $row['room_id']; ?>" class="">
                  Sign Lease Agreement
                </a>
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
