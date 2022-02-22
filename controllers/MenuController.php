<?php
    require_once '../config/Database.php';

    class MenuController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from produktet');

            return $query -> fetchAll();
        }

        public function insert($request){
            $request['foto'] = './img/'.$request['foto'];
            $query = $this->db->pdo->prepare('INSERT into produktet(foto_produktit, emri_produktit, cmimi_Produktit)
            values (:foto_produktit, :emri_produktit, :cmimi_produktit)');

            $query ->bindParam(':foto_produktit', $request['foto']);
            $query ->bindParam(':emri_produktit', $request['emri']);
            $query ->bindParam(':cmimi_produktit', $request['cmimi']);

            $query ->execute();

            return header('Location: Dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * from produktet where id = :id');

            $query ->bindParam(':id', $id);
            $query ->execute();

            return $query ->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE produktet SET foto_produktit = :foto_produktit, emri_produktit=:emri_produktit,
            cmimi_produktit = :cmimi_produktit where id = :id');

            $query ->bindParam(':foto_produktit', $request['foto']);
            $query ->bindParam(':emri_produktit', $request['emri']);
            $query ->bindParam(':cmimi_produktit', $request['cmimi']);
            $query ->bindParam(':id', $id);
            $query ->execute();

            return header('Location: Dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from produktet where id=:id');
            $query ->bindParam(':id', $id);
            $query ->execute();

            return header('Location: Dashboard.php');
        }
    }
?>