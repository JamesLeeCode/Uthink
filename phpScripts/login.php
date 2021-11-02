<?php
session_start();
 include 'db_connection.php';

 //Open DB Connection
 $conn = OpenCon();

  $user = mysqli_real_escape_string( $conn, $_POST['email']);
  $password = mysqli_real_escape_string( $conn, $_POST['password']);


 $query = "SELECT * FROM users WHERE email	= '".$user ."' AND password = '".$password."'  ";
 $result = mysqli_query( $conn,  $query);

 $_SESSION["email"] =   $_POST['email'];
 $user = $_POST['email'];
 //CLose DB Connection
  CloseCon($conn);
if(mysqli_num_rows( $result)==1)
{
  header("Location:../dashboard.php");
  exit();
}
else {
  header("Location:../login.php?status=error");
  exit();
}





 ?>
