<?php

include_once '../src/dbconnection.php';
class User {
    //some logic

    public function login($email, $password){
    //check users
        $stmt = "SELECT * FROM users WHERE email=$email";
        $query = mysqli_query($conn, $stmt);
       
        if(mysqli_num_row($query)>0){

            while($row=mysqli_fetch_assoc($query)){

                if(password_verify($password, $row['password'])){
                    $emmail=$row['email'];
                    $_SESSION['name']=$row['name'];

                    header("Location:../src/dash.php");
                }
                else{
                    header("Location: ../src/forms/login.php");
                }
            }
        }
    }

    public function register($naame,$email, $password,){

     //check users   
      $stmt = "SELECT * FROM users WHERE email=$email" ;
      $query = mysqli_query($conn, $stmt);

      if(mysqli_num_row($quer)>0){
        echo "User already exist.";
        exit();
      }
      
      //insert user into database
      $stmt= "INSERT TO users (name,email,password) VALUES('$name','$password','$email')";
        if(mysqli($conn,$stmt)){
            header("Location:../src/dash.php");
        }else{
            header("Location:../src/forms/login.php");
        }

    }
}


?>