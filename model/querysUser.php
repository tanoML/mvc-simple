<?php

include "User.php";

class querysUser{

    public static function insertUser($name,$correo,$phone){
        $newUser = new User($name,$phone,$correo);
        echo " dentro del modelo: " . $newUser->getName();
    }
}