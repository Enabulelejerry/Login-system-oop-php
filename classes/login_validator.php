<?php

class LoginValidator
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

    private function validatePassword()
    {
        $pass1 = trim($this->data['password']);
        if (empty($pass1)) {
            $this->errors[]="password cannot be empty";
        }
    }
}