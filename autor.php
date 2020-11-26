<?php
    class Autor{
            private $id;
            private $nombre;
            private $apellido;
            private $nacionalidad;
            private $nacimiento;
            private $libros;


            function __constructor(){} 

            public function getNombre(){
                return $this->nombre;
            }
            public function setNombre($nombre){
                $this->nombre = $nombre;
            }

            //autor
            public function getApellido(){
                return $this->apellido;
            }
            public function setApellido($apellido){
                 $this->apellido = $apellido;
            }
            //edicion           
            public function getNacionalidad(){
                return $this->nacionalidad;
            }
            public function setNacionalidad($nacionalidad){
                 $this->nacionalidad = $nacionalidad;
            }
            public function getNacimiento(){
                return $this->nacimiento;
            }
            public function setNacimiento($nacimiento){
                 $this->nacimiento = $nacimiento;
            }
            public function getLibros(){
                return $this->libros;
            }
            public function setLibros($libros){
                 $this->libros = $libros;
            }
            //posibles minusculas en el id 

            public function getId(){
                return $this->id;
            }
            public function setId($id){
                $this->id=$id;
            }

            public function getSagas(){
                return $this->sagas;
            }
            public function setSagas($sagas){
                $this->sagas=$sagas;
            }

            public function getEditoriales(){
                return $this->editoriales;
            }
            public function setEditoriales($editoriales){
                $this->editoriales=$editoriales;
            }

            public function getSeudonimo(){
                return $this->seudonimo;
            }
            public function setSeudonimo($seudonimo){
                $this->seudonimo=$seudonimo;
            }
    }

?>