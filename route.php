<?php

include_once '../src/classes/User.php';
session_start();

$user = New User();
if(isset($_POST['login'])){
    // extract the login info from the form
    $email = $_POST['email'];
    $password = $_POST['password'];


 //check if all fields are field
    if (empty ($email) || empty ($password)){
        echo "All input fields required.";
    }
//validate password
    elseif(!filter_var ($email, VALIDATE_FILTER_EMAIL)){
        echo "Invalid email format";
    }
    else{
        header("Location:../src/form/login.php?message=No user found");
    }

    $user->login($email, $pasword);
    exit();

}

elseif(isset($_POST['register'])){
    // extract the login info from the form
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT );
    $name = $_POST['name'];
//check if all fields are field
    if (empty ($name) ||empty ($email) || empty ($password)){
        echo "All input fields required.";
    }
//validate password
    elseif(!filter_var ($email, VALIDATE_FILTER_EMAIL)){
        echo "Invalid email format";
    }
    else{

        header("Location:../src/form/register.php");
    }

    
    $user->register($name, $email, $password);
}
?>