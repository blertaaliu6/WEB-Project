<?php
require_once "databaseConfig.php";

class UserMapper extends DatabasePDOConfiguration
{
    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($userID)
    {
        $this->query = "select * from user where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userID);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function upgradeRole($id)
    {

        $this->query = "update user set role=1 where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
    public function downgradeRole($id)
    {

        $this->query = "update user set role=0 where user_id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }


    public function getUserByUsername($username)
    {
        $this->query = "select * from user where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getAllUsers()
    {
        $this->query = "select * from user";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insertUser(SimpleUser $user)
    {
        $this->query = "insert into User (name,lname,username,password,cpassword,email,role) values (:name,:lname,:username,:pass,:cpass,:email,:role)";
        $statement = $this->conn->prepare($this->query);
        $name = $user->getname();
        $lname = $user->getlname();
        $username = $user->getUsername();
        $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $cpass = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $email = $user->getEmail();
        $role = $user->getRole();

        $statement->bindParam(":name", $name);
        $statement->bindParam(":lname", $lname);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":pass", $pass);
        $statement->bindParam(":cpass", $cpass);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function deleteUser($userId)
    {
        $this->query = "delete from user where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }
}
