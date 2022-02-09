<?php

 class SignContr extends Signup {

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid,$pwd,$pwdRepeat,$email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }


    public function signUser(){

        if($this->uidTakencheck() == false){
            // echo "useremail or name already taken"

            header("location:../index.php?error=useroremailtaken");
            exit();
        }

       $this->setUser($this->uid,$this->pwd,$this->email);

    }


 private function uidTakencheck() {
    $result='';
    if(!$this->checkUser($this->uid,$this->email) ){
        $result = false;
    }else{
        $result = true;
    }
   
    return $result;
}

}