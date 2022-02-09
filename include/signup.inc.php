<?php
   // Instantiate signupcontr class
   require('./classes/user_validator.php');
   include "./classes/dbh.classes.php";
   include "./classes/signup.classes.php";
   include "./classes/signup-contr.classes.php";
   $errors = [];
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confpass = $_POST['confpass'];

    $validation =  new UserValidator($_POST);
    $errors = $validation->validateForm();

if(count($errors)==0){
    $signup = new SignContr($username,$password,$confpass,$email);
    $signup->signUser();
}


   


 
    // $signup = new SignContr($username,$password,$confpass,$email);

    // // Running error handlers and user  signup
    // $signup->signupUser(); 

    // // going to back to front page

    // //header("location:../index.php?error=none");

}
