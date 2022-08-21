<?php

class Conexion{

    public function getConnection(){
        require_once 'config.php';
        try{

            $conn = new PDO("pgsql:host=$host; dbname=$dataBase;",$user,$password);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $conn->query("SET NAMES '$charset'");



        }catch(PDOException $p){

            die('No se ha podido conectar: '.preg_last_error());
        }

       return $conn;
    }

}

?>