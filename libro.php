<?php
    class Libro{
            private $id;
            private $nombre;
            private $autor;
            private $edicion;

            function __constructor(){} 

            public function getNombre(){
                return $this->nombre;
            }
            public function setNombre($nombre){
                $this->nombre = $nombre;
            }

            //autor
            public function getAutor(){
                return $this->autor;
            }
            public function setAutor($autor){
                 $this->autor = $autor;
            }
            //edicion           
            public function getEdicion(){
                return $this->edicion;
            }
            public function setEdicion($edicion){
                 $this->edicion = $edicion;
            }
            //posibles minusculas en el id 

            public function getId(){
                return $this->id;
            }
            public function setId($id){
                $this->id=$id;
            }
    }

?>