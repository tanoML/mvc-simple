<?php 

class User{

    private $name;
    private $phone;
    private $email;

    public function __construct($name,$phone,$email){
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }


    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

}