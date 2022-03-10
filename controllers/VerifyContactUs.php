<?php
include_once 'ContactUsMapper.php';
include_once 'Message.php';

if(isset($_POST['submit'])){
    $message = new MessageLogic($_POST);
    $message -> insertData();
}

class MessageLogic{
    private $name;
    private $email;
    private $message;

    public function __construct($formData){
        $this -> name = $formData['name'];
        $this -> email = $formData['email'];
        $this -> message = $formData['message'];
    }

    public function insertData(){
        if($this ->variablesNotDefinedWell($this->name, $this->email, $this->message)){
            header("Location: ../contact.php");
        }else{
            $mapper = new ContactUsMapper();
            $mapper ->insertMessage($this->name, $this->email, $this->message);
            header("Location: ../home.php");
        }
    }

    private function variablesNotDefinedWell($name, $email, $message){
        if(empty($name) || empty($email) || empty($message)){
            return true;
        }
        return false;
    }
}
?>