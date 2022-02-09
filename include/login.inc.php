<?php
   // Instantiate signupcontr class
   require('./classes/login_validator.php');
   include "./classes/dbh.classes.php";
   include "./classes/login_model.php";
   include "./classes/login-contr.classes.php";
   $errors = [];
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $validation =  new LoginValidator($_POST);
    $errors = $validation->validateForm();
 if (count($errors)==0) {
     $signin = new  LoginContr($username, $password);
     $errors= $signin->LoginUser();
  
    }
}


 
    // $signup = new SignContr($username,$password,$confpass,$email);

    // // Running error handlers and user  signup
    // $signup->signupUser(); 

    // // going to back to front page

    // //header("location:../index.php?error=none");