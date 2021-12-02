<?php
  session_start();

   include 'db_connection.php';
  //Getting Data from the form
  //jobCode is the primary key

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


       function generateRandomString($length = 13) {
           $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
           $charactersLength = strlen($characters);
           $randomString = '';
           for ($i = 0; $i < $length; $i++) {
               $randomString .= $characters[rand(0, $charactersLength - 1)];
           }
           return $randomString;
       }
       $request_id = generateRandomString();
       $address = $_POST['address'];
       $price = $_POST['price'];
       $name = $_POST['name'];
       $phone = $_POST['phone'];
       $dateOfmoving = $_POST['date'];
         $id = $_POST['id'];
       $conn = OpenCon();
        // Enter Designations Into DB
       if(!$conn -> query(
         " INSERT INTO requests (requestID, roomId,	tenantName,	TenantPhone, dateMoving, image )
         VALUES ('$request_id','$id','$name','$phone', '$dateOfmoving','$pic')"
         ))
         {
           echo("Error description: ". $conn->error);
         }




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
      $mail->setFrom('jamesleeroycode@gmail.com', 'Student-Tenant');
      $mail->addAddress('jamesleeroycode@gmail.com', 'System Admin');     //Add a recipient
    //  $mail->addAddress('ellen@example.com');               //Name is optional
    //  $mail->addReplyTo('info@example.com', 'Information');
    //  $mail->addCC('cc@example.com');
    //  $mail->addBCC('endani.nevondo@gmail.com');

      //Attachments
    //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Booking Application Submitted';
      $mail->Body    = 'Good Day Admin <br> , the following student is interested in the one of your rooms located at :'.$address.' at R'. $price .' per month. <br>The name of the student is '. $name .'. you can contact the student on: '. $phone. 'The student would like to move in on the following date :'. $dateOfmoving ;
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();

  } catch (Exception $e) {
  }

   //CLose DB Connection
header("Location:../dashboard.php?send=send");

 //CLose DB Connection
 CloseCon($conn);


 exit();
 ?>
