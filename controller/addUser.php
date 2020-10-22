<?php

include "../model/querysUser.php";

class addUser{
    static function saveUser($nombre,$correo,$telefono){
        querysUser::insertUser($nombre,$correo,$telefono);
    }
}



if($_POST['nombre'] && $_POST['correo'] && $_POST['telefono']){
    addUser::saveUser($_POST['nombre'],$_POST['correo'],$_POST['telefono']);
}