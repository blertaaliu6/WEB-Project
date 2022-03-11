<?php
require_once 'databaseConfig.php';


class ContactUsMapper extends DatabasePDOConfiguration{
    private $conn;
    private $query;

    public function __construct(){
        $this->conn = $this->getConnection();
    }

    public function getAllMessages(){
        $this->query = "select * from Contact_us";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertMessage($n,$e,$m){
        $this->query = "insert into contact_us (name, email, message)  values (:name, :email, :message)";
        $statement = $this->conn->prepare($this->query);
        $name = $n;
        $email = $e;
        $message = $m;

        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":message", $message);
        $statement->execute();
    }

    public function deleteMessage($id){
        $this->query = "delete from contact_us where ID = :id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
}
?>