<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = mysqli_connect( $servername,$username,$password, $dbname );

    if(!isset($conn)){
        echo "connection failed";
    }
    else{
        echo "connection succesfull";
    }
?>