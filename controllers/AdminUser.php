<?php
include_once 'person.php';

class AdminUser extends Person
{
    public function __construct($name,$lname,$username, $password, $email, $role,$cpassword)
    {
        parent::__construct($name,$lname,$username, $password, $email, $role,$cpassword);
    }

    public function setSession()
    {

        $_SESSION["role"] = 1;
        $_SESSION['roleName'] = "Administrator";
        $_SESSION['name'] = $this->getUsername();
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), date("d M Y H:i:s"));
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
