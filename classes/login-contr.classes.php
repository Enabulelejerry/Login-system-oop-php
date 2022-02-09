<?php

class LoginContr extends Login
{

    private $uid;
    private $pwd;
    private $errors = [];

    public function __construct($uid,$pwd)
    {
         $this->uid = $uid;
         $this->pwd = $pwd;

    }


    public function LoginUser(){
        if($this->loguser($this->uid,$this->pwd) == true){  
           
        }else{
             
            $this->errors = ["username 0r password is invalid"];
        }
        return $this->errors;
        
    }
}
