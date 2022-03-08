<?php
include_once 'person.php';

class SimpleUser extends Person{
    public function __construct($name,$lname,$username, $password,$cpassword,$email, $role) {
        parent::__construct($name,$lname,$username, $password,$cpassword,$email, $role);
    }

    public function setSession (){

        $_SESSION["role"] = 0;
        $_SESSION['roleName'] = "SimpleUser";
        $_SESSION['name'] = $this->getUsername();
    }

    public function setCookie(){
        setcookie("username" , $this->getUsername(),date("d M Y H:i:s"));
    }

    public function getname()
    {
        return $this->name;
    }
    public function getlname()
    {
        return $this->lname;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getRole()
    {
        return $this->role;
    }

}