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

  public function editBooks($Book){
  $stm=null;
  try {
  
    $stm=$this->pdo->prepare("UPDATE usuario SET nombre=? WHERE id=?;");
    $stm=$th->pdo->execute(array($Book->getNombre(),$Book->getId()));
    header('location:../vista/listBooks.php');
  } catch (PDOException $e) {
    die($e->getMessage());
    }
  }

  public function deleteBooks($Book){
    $stm=$this->pdo->prepare("DELETE FROM usuario WHERE id=?;");
    $stm=$th->pdo->execute(array($Book->getId()))
  }
}