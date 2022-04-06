<?php
    require_once 'databaseConfig.php';
    //  session_start();
    
    class MenuController extends DatabasePDOConfiguration{
        public $db;

        public function __construct(){
            $this->db = $this->getConnection();
        }

        public function readData(){
            $query = $this->db->query('SELECT * from produktet');

            return  $query ->fetchAll();
        }

        public function select($kategoria){
            $query = $this->db->prepare('SELECT * from produktet where kategoria=:kategoria_produktit');
            $query ->bindParam(':kategoria_produktit', $kategoria);
            $query ->execute();
            return  $query ->fetchAll();
          
        }

        public function insert($request){
            $request['foto'] = './img/'.$request['foto'];
            $query = $this->db->prepare('INSERT into produktet(foto_produktit, emri_produktit,cmimi_Produktit,kategoria,added)
            values (:foto_produktit, :emri_produktit, :cmimi_produktit,:kategoria,:added)');

            $query ->bindParam(':foto_produktit', $request['foto']);
            $query ->bindParam(':emri_produktit', $request['emri']);
            $query ->bindParam(':cmimi_produktit', $request['cmimi']);
            $query ->bindParam(':kategoria', $request['pcategory']);
            $query ->bindParam(':added', $_SESSION['username']);

            $query ->execute();

            return header('Location:  ../views/Dashboard.php');
        }

        public function edit($id){
            $query = $this->db->prepare('SELECT * from produktet where ID = :id');

            $query ->bindParam(':id', $id);
            $query ->execute();

            return $query ->fetch();
        }

        public function update($request, $id){
            $query = $this->db->prepare('UPDATE produktet SET foto_produktit = :foto_produktit, emri_produktit=:emri_produktit,
            cmimi_produktit = :cmimi_produktit,kategoria =:kategoria, added=:added where  ID = :id');

            $query ->bindParam(':foto_produktit', $request['foto']);
            $query ->bindParam(':emri_produktit', $request['emri']);
            $query ->bindParam(':cmimi_produktit', $request['cmimi']);
            $query ->bindParam(':kategoria', $request['pcategory']);
            $query ->bindParam(':added', $_SESSION['username']);
            $query ->bindParam(':id', $id);
            $query ->execute();

            return header('Location: ../views/Dashboard.php');
        }


        public function delete($id){
            $query = $this->db->prepare('DELETE from produktet where ID =:id');
            $query ->bindParam(':id', $id);
            $query ->execute();

            return header('Location:  ../views/Dashboard.php');
        }

    
    }
    
?>