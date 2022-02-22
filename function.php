<?php

class Contact{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "contact";
    public $mysqli;

    public function __construct(){
        return $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function contact_us($data){
        $cname = $data['name'];
        $cemail = $data['email'];
        // $cmessage = $data['message'];

        $cmessage = isset($_GET['message']) ? $_GET['message'] : '';

        $q = "INSERT into contact_us set  name_contact = '$cname', email_contact = '$cemail', message_contact = '$cmessage'";
        return $this->mysqli->query($q);
    }
}


?>