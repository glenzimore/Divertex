<?php
class crud {
    public static function connect() {
        try {
            $con = new PDO('mysql:host=localhost;dbname=CRUD', 'root', '');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOException $error1) {
            echo 'Something went wrong, it was not possible to connect to the database: ' . $error1->getMessage();
            return null;  
        } catch (Exception $error2) {
            echo 'Generic error: ' . $error2->getMessage();
            return null;
        }
    }
    public static function selectdata(){
        $data=array();
        $p=crud::connect()->prepare('SELECT * FROM crudtable');
        $p->execute();
        $data=$p->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public static function delete($id){
        $p=crud::connect()->prepare('DELETE FROM crudtable WHERE id = :id');
        $p->bindValue(':id',$id);
        $p->execute();
        

    }
} 
