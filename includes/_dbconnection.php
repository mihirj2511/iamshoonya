<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shoonya_info";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        echo "Couldn't Establish Connection".mysqli_error($conn);
    }else
    {
        // echo "Connection Established.";
    }

?>