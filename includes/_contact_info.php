<?php
    include_once ('includes/_dbconnection.php');

    $name='';
    $email='';
    $subject='';
    $message='';

    if($_SERVER['REQUEST_METHOD']=="POST"){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $sql = "INSERT INTO `user_info`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
        
        if(mysqli_query($conn, $sql)){
            echo"AddSuccess";
        }else{
            echo"AddFailed";
        }
    }
    
    mysqli_close($conn);
?>