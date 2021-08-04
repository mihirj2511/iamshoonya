<?php
 use PHPMailer\PHPMailer\PHPMailer;

 if(isset($_POST['name']) && isset($_POST['email'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     require_once "PHPMailer/PHPMailer.php";
     require_once "PHPMailer/SMTP.php";
     require_once "PHPMailer/Exception.php";

     $mail = new PHPMailer();

     //SMTP Settings

     $mail -> isSMTP();
     $mail -> Host = "smtp.hostinger.com";
    //  $mail -> SMTPDebug = 2;
     $mail -> SMTPAuth = "true";
     $mail -> Username = "info@iamshoonya.com";
     $mail -> Password = "Shoonya@1234";
     $mail -> SetFrom('info@iamshoonya.com', 'Mr. Krushna Ratnaparkhi');
     $mail -> Port = "587";
     $mail -> SMTPSecure = "tls";

     //Email Settings

     $mail -> isHTML(true);
     $mail -> setFrom($email, $name);
     $mail -> addAddress("info@iamshoonya.com");
     $mail -> addAddress("mihirjoshi@iamshoonya.com");
     $mail -> addAddress("ajinkyasalunke@iamshoonya.com");
     $mail -> addAddress("yashkorde@iamshoonya.com");
     $mail -> Subject = ("$email ($subject)");
     $mail -> Body = $message;

     if($mail -> send()){
         $status = "success";
         echo $status;
        //  $response = "Email is sent!";
         
     }else{
         $status = "failed".$mail-> ErrorInfo;
         echo $status;
        //  $response = "Something went wrong: " .$mail -> ErrorInfo;

     }

    //  exit(json_encode(array("status" => $status, "response" => $response)));
 }

?>