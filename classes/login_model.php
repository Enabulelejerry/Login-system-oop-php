<?php

class Login extends Dbh
{

    protected function loguser($uid,$pwd){
        $result='';
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE users_uid = ?");
        $stmt->execute([$uid]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row && password_verify($pwd,$row['users_pwd'])){ 
            $this->SessionUser($row);
            //print_r($row);
            $result = true;
        }
        else{
            $result = false;
        }
         
        return $result;
    } 

    protected function SessionUser($user){
        $_SESSION['username'] = $user['users_uid'];
    }
}

