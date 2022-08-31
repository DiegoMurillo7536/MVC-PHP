<?php 
require_once '../conexion/conexion.php';
require_once '../modelo/Book.php';

class BooksNegocio extends conexion{

    public $pdo;
    public function __construct()

    {
    $this->pdo=parent::getConnection();    
    }

    public function findAllBooks(){
          $stm=null;

          try {
            $stm= $this->pdo->prepare("SELECT * FROM usuario;");
            $stm->execute();
            $data=$stm->fetchAll(PDO::FETCH_OBJ);
            return $data;
          } catch (\PDOException $e ) {
            die($e->getMessage());
          }
    }

  public function addBooks($Book){
    $stm=null;
    try {
        $stm = $this->pdo->prepare("INSERT INTO usuario VALUES(?);");
        $stm->execute(array($Book->getNombre()));
        header('location:../vista/listBooks.php');
    } catch (PDOException $e) {
         die($e->getMessage());
    }

  }
  public function editBook($Book){
    $stm=null;
    try {
      //code...
      $stm=$this->pdo->prepare("UPDATE usuario set nombre=? where id=?");
      $stm->execute(array($Book->getNombre(),$Book->getId()));
      header("location:../vista/listBooks.php");
    } catch (\Throwable $th) {
      //throw $th;
    }  
  }

  public function deletebook($Book)
  {
    # code...
    $stm=null;
    try {
      //code...
      $stm=$this->pdo->prepare("DELETE FROM usuario where id=?");
      $stm->execute(array($Book->getId()));
      header('location:../vista/listBooks.php');
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

}