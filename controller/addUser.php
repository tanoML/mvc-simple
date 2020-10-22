<?php

include "../model/querysUser.php";

class addUser{


    function saveUser($nombre,$correo,$telefono){

        $query = new querysUser();
        $query->insertUser($nombre,$correo,$telefono);
        
        //echo $nombre . " and " . $correo . " and ". $telefono;

    }




}



if($_POST['nombre'] && $_POST['correo'] && $_POST['telefono']){

    //echo "si llego aqui";
    $add = new addUser();
    $add->saveUser($_POST['nombre'],$_POST['correo'],$_POST['telefono']);

}