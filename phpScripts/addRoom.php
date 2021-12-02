<?php

 include 'db_connection.php';

  //Getting Data from the form
  //jobCode is the primary key
  $location = $_POST['location'];
  $description = $_POST['description'];
  $price = $_POST['price'];


  function generateRandomString($length = 13) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
  $room_id = generateRandomString();
 //Open DB Connection

 if(isset($_FILES["pic"]) && $_FILES["pic"]["error"] == 0){
           $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
           $filename = $_FILES["pic"]["name"];
           $filetype = $_FILES["pic"]["type"];
           $filesize = $_FILES["pic"]["size"];

           // Verify file extension
           $ext = pathinfo($filename, PATHINFO_EXTENSION);
           if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

           // Verify file size - 5MB maximum
           $maxsize = 5 * 1024 * 1024;
           if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

           // Verify MYME type of the file
           if(in_array($filetype, $allowed)){
               // Check whether file exists before uploading it
               if(file_exists("upload/" . $filename)){
                   echo $filename . " is already exists.";
               } else{
                   move_uploaded_file($_FILES["pic"]["tmp_name"], "upload/" . $filename);
                     $pic = $filename;
               }
           } else{
               echo "Error: There was a problem uploading your file. Please try again.";
           }
       } else{
           echo "Error: " . $_FILES["pic"]["error"];
       }





 $conn = OpenCon();
  // Enter Designations Into DB
 if(!$conn -> query(
   " INSERT INTO rooms (room_id,	location,	description,price, pic, status	)
   VALUES ('$room_id','$location','$description', '$price','$pic', 'open')"
   ))
   {
     echo("Error description: ". $conn->error);
   }
 /*

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   use PHPMailer\PHPMailer\SMTP;
    //Getting Data from the form
    //jobCode is the primary key


   require 'PHPMailer/src/Exception.php';
   require 'PHPMailer/src/PHPMailer.php';
   require 'PHPMailer/src/SMTP.php';

   $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'jamesleeroycode@gmail.com';                     //SMTP username
      $mail->Password   = 'Cricket/50797';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('jamesleeroycode@gmail.com', 'Traffic Department Booking System Admin');
      $mail->addAddress($email, 'System User');     //Add a recipient
    //  $mail->addAddress('ellen@example.com');               //Name is optional
    //  $mail->addReplyTo('info@example.com', 'Information');
    //  $mail->addCC('cc@example.com');
    //  $mail->addBCC('bcc@example.com');

      //Attachments
    //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Booking Application Submitted';
      $mail->Body    = 'PLEASE  THIS AN IMPORTANT EMAIL <br> Good Day,   '.$fullNames.'<br> Your booking application has been submitted, please wait for an email that will when you come for the Appoinmtent.   ';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
   //CLose DB Connection


 //CLose DB Connection
 CloseCon($conn);

*/
 header("Location:../adminDashboard.php");
 exit();
 ?>
