<?php
require_once("conexion/Conexion.php");
$conexion=new Conexion();
if($conexion->getConnection()){
    header('location:vista/listBooks.php');
}
?>
