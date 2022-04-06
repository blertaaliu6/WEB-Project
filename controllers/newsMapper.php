<?php

    require_once 'databaseConfig.php';


    class newsMapper extends DatabasePDOConfiguration{
        private $conn;
        private $query;

        public function __construct(){
            $this ->conn = $this->getConnection();
        }

        public function getAllNews(){
            $this->query = "select * from news";
            $statement = $this->conn->prepare($this->query);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function removeNews($id){
            $this->query = "delete from  news where ID=:id";
            $statement = $this->conn->prepare($this->query);
            $statement->bindParam(":id", $id);
            $statement->execute();
        }

        public function insertNews($request){
            $request['foto'] = './img/'.$request['foto'];
            $statement = $this->conn->prepare('INSERT into news (foto_lajmit,titulli_lajmit,permbajtja_lajmit,data_lajmit)
             values(:foto_lajmit, :titulli_lajmit,:permbajtja_lajmit,:data_lajmit)');

             $statement->bindParam(":foto_lajmit", $request['foto']);
             $statement->bindParam(":titulli_lajmit", $request['titulli']);
             $statement->bindParam(":permbajtja_lajmit", $request['permbajtja']);
             $statement->bindParam(":data_lajmit", $request['data']);
             $statement->execute();
        }
    }
?>