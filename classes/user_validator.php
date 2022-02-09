<?php

class UserValidator
{
    private $data;
    private $errors = [];

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm()
    {
        $this->validateUsername();
        $this->validateEmail();
        $this->validatePassword();

        return $this->errors;
    }


    private function validateUsername()
    {
        $val = trim($this->data['username']);
        if (empty($val)) {
            $this->errors[]="UserName cannot be empty";
         } 
         //else {
        //     if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
        //         $this->errors[]="username must be 6-12 chars & alphanumeric";
        //     }
        // }
    }

    private function validateEmail(){
        $val = trim($this->data['email']);

        if(empty($val)){
            $this->errors[]="Email cannot be empty";
        }else{
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->errors[]="Email is not valid";
            }
        }
    }

    private function validatePassword(){
        $pass1 = trim($this->data['password']);
        $pass2 = trim($this->data['confpass']);

        if(empty($pass1) || empty($pass2) ){
            $this->errors[]="password cannot be empty";
        }


        if($pass1 !== $pass2){
            $this->errors[]="password don't match";
        }
    }
}


