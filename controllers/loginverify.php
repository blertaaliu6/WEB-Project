<?php
include_once 'AdminUser.php';
include_once 'SimpleUser.php';
require_once 'userMapper.php';
session_start();

if (isset($_POST['login'])) {
    $login = new LoginLogic($_POST);

    $login->verifyData();
} else if (isset($_POST['register'])) {
    $register = new RegisterLogic($_POST);

    $register->insertData();
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location:../views/login.php");
            echo 'emptyvariables';
        }
        if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {

            header("Location:../home.php");
        } else {
            header("Location:../views/login.php");
            echo 'ERROR';
        }
    }
    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        $hashUSERPASSWORD = password_hash($user['password'], PASSWORD_BCRYPT);

    
        if ($user == null || count($user) == 0) {
            return false;
        } else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
               
                $obj = new AdminUser($user['user_id'], $user['name'],$user['lname'],$user['username'], $user['email'], $user['password'],$user['cpassword']);
                print_r($obj);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['user_id'], $user['name'],$user['lname'],$user['username'], $user['email'], $user['password'],$user['cpassword']);
                $obj->setSession();
            }
            return true;
        } else
            return false;
    }
}
class RegisterLogic
{   
    private $name ="";
    private $lname ="";
    private $username = "";
    private $email = "";
    private $password = "";
    private $cpassword = "";



    public function __construct($formData)
    {   $this->name = $formData['name'];
        $this->lname = $formData['lname'];
        $this->username = $formData['username'];
        $this->password = $formData['password'];
        $this->cpassword = $formData['cpassword'];
        $this->email = $formData['email'];
    }

    public function insertData()
    {

        if ($this->variablesNotDefinedWell($this->name,$this->lname,$this->username, $this->password,$this->cpassword,$this->email)) {
            header("Location:../views/register.php");
            echo 'emptyvariables';
        } else {
            $user = new SimpleUser($this->name,$this->lname,$this->username, $this->password,$this->cpassword,$this->email, 0);
            $mapper = new UserMapper();
            $mapper->insertUser($user);
            header("Location:../views/signin.php");
        }
    }
    private function variablesNotDefinedWell($name,$lname,$username, $password,$cpassword,$email)
    {
         if ( empty($name) || empty($lname) || empty($username) || empty($password) ||  empty($cpassword) || empty($email)) {
             return true;
         }
        return false;
    }
}
