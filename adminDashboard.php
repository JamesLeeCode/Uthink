

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
  <title>UTHINK</title>

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
                  <a class="mr-4"  data-target="#modal-default" data-toggle="modal"  id="MainNavHelp"
       href="#modal-default" >
                    Add Room
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
          Marketed Rooms
        </h2>
        <p>
          When a room has been taken please remove it from the Market
        </p>
      </div>
      <div class="sale_container">
        <?php

include 'phpScripts/db_connection.php';
$conn = OpenCon();
if (!empty($_POST['location']))  {
  $location = $_POST['location'];
$sql = "SELECT * FROM rooms WHERE location LIKE '%$location%'  ";
}
else {
$sql = "SELECT * FROM rooms";
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
            <h6>
              <?php echo  $row['location']; ?>
            </h6>
            <p>
              <?php echo  $row['description']; ?>
            </p>
            <div style="margin-top:-45px" class="btn-box">
                <a href="phpScripts/deleteRoom.php?id=<?php echo  $row['room_id']; ?>" class="">
                  Delete Room
                </a>
              </div>
          </div>

        </div>
      <?php } ?>


      <div class="btn-box">

      </div>
    </div>
  </section>


  <div class="modal fade" id="modal-default">

         <div class="modal-dialog">
           <div class="modal-content">

             <div class="modal-header">
               <h4 class="modal-title">Add A Room On The Market</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <form action="phpScripts/addRoom.php" method = "POST" enctype="multipart/form-data">
             <div class="modal-body">
                  <form >
               <p>Please Fill In the Form</p>
               <div id="card" style="width:100%">
                 <div id="card-content">
                <label for="user-email" style="padding-top:13px">
             &nbsp;Room Location
             </label>
             <div ></div>
             <input style="margin-top:-25px"id="location" class="form-content" type="text" name="location" autocomplete="on" required />

             <div class="form-border"></div>
             <label for="user-password" style="padding-top:22px">&nbsp;Room Description
             </label>
                <div ></div>
             <input style="margin-top:-25px" id="description" class="form-content" type="text" name="description" required />
             <div class="form-border"></div>
             <label for="user-password" style="padding-top:22px">&nbsp;Room Price
             </label>
               <div ></div>
             <input style="margin-top:-25px" id="price" class="form-content" type="number" name="price" required />
             <div class="form-border"></div>
             <label for="user-password" style="padding-top:22px">&nbsp;Image Of The Room
             </label>
             <input  style="margin-top:-10px" required type="file" id="pic" class="form-content"  name="pic"  />

             <a href="#">

             </a>

             </div>
             </div>
             </div>
             <div class="modal-footer justify-content-between">
               <input style="margin-top:-10px" id="submit-btn" type="submit" name="submit" value="Save changes" />
             </div>
     </form>
           </div>
           <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->

       </div>
       <!-- /.modal -->


  <!-- end sale section -->


  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>
