<?php 

abstract class Person
{
    protected $name;
    protected $lname;
    protected $username;
    protected $email;
    protected $password;
    protected $cpassword;
    protected $role;

    function __construct($name,$lname,$username, $password, $email, $role,$cpassword)
    {
        $this->name = $name;
        $this->lname = $lname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->cpassword = $cpassword;
        $this->role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();
}


?>