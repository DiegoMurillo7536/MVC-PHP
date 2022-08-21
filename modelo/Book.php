<?php

 class Book{

   
    private $id;
    private $nombre;

    public function setNombre($nombre):void{

        $this->nombre=$nombre;
    }

    public function getNombre():string{
        return $this->nombre;

    }
    public function setId($id):void{

        $this->id=$id;
    }

    public function getId():int{
        return $this->id;

    }
}

?>