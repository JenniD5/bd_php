<?php
//incluir la conexion a BD
    require_once('conexion.php');

    class CrudLibro{
        //constructor de la clase
        public function __construct(){}
            //metodo para insertar
        public function insertar($libro){ //recibe parametro libro, de la clase 
            //conectar a la base
            $db=Bd::conectar();
            $insert =$db->prepare('INSERT INTO libro values(NULL, :Nombre, :Autor, :Edicion)');
            $insert->bindValue('Nombre', $libro->getNombre());
            $insert->bindValue('Autor', $libro->getAutor());
            $insert->bindValue('Edicion', $libro->getEdicion());
            $insert->execute();
        }

        function mostrar(){
			$db=Bd::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM libro');

			foreach($select->fetchAll() as $libro){
				$myLibro= new Libro();
				$myLibro->setId($libro['id']);
				$myLibro->setNombre($libro['Nombre']);
				$myLibro->setAutor($libro['Autor']);
				$myLibro->setEdicion($libro['Edicion']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}
    }        
    
      
        
    

?>