<?php

  //Getting Data from the form
  //jobCode is the primary key
  $address = $_POST['address'];
  $price = $_POST['price'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $dateOfmoving = $_POST['date'];
 //Open DB Connection



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
      $mail->addAddress('endani.nevondo@gmail.com', 'System Admin');     //Add a recipient
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
      $mail->Body    = 'Good Day Admin <br> , the following student is interested in the one of your rooms located at :'.$address.' at R'. $price .' per month. <br>The name of the student is '. $name .'. you can contact the student on: '. $phone. 'The student would like to move in on the following date :'. $dateOfmoving ;
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();

  } catch (Exception $e) {
  }
   //CLose DB Connection
header("Location:../dashboard.php?send=send");

 //CLose DB Connection
 CloseCon($conn);


 header("Location:../dashboard.php?email=sent");
 exit();
 ?>
