<?php

include "User.php";

class querysUser{


    public function insertUser($name,$correo,$phone){
        $newUser = new User($name,$phone,$correo);
    }

}