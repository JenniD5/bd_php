<?php
//incluir la conexion a BD
    require_once('conexion.php');

    class CrudAutor{
        //constructor de la clase
        public function __construct(){}
            //metodo para insertar
        public function insertar($autor){ //recibe parametro libro, de la clase 
            //conectar a la base
            $db=Bd::conectar();
            $insert =$db->prepare('INSERT INTO autores values(NULL, :Nombre, :Apellido, :Nacionalidad, :Nacimiento, :Libros, :Sagas, :Editoriales, :Seudonimo)');
            $insert->bindValue('Nombre', $autor->getNombre());
            $insert->bindValue('Apellido', $autor->getApellido());
            $insert->bindValue('Nacionalidad', $autor->getNacionalidad());
            $insert->bindValue('Nacimiento', $autor->getNacimiento());
            $insert->bindValue('Libros', $autor->getLibros());
            $insert->bindValue('Sagas', $autor->getSagas());
            $insert->bindValue('Editoriales', $autor->getEditoriales());
            $insert->bindValue('Seudonimo', $autor->getSeudonimo());
            $insert->execute();
        }

        function mostrar(){
            $db=Bd::conectar();
            $listaAutores=[];
            $select = $db->query('SELECT * FROM autores');

           foreach($select->fetchAll() as $autor){
               $myAutor=new Autor();
               $myAutor->SetId($autor['id']);
               $myAutor->SetNombre($autor['Nombre']);
               $myAutor->SetApellido($autor['Apellido']);
               $myAutor->SetNacionalidad($autor['Nacionalidad']);
               $myAutor->SetNacimiento($autor['Nacimiento']);
               $myAutor->SetLibros($autor['Libros']);
               $myAutor->SetSagas($autor['Sagas']);
               $myAutor->SetEditoriales($autor['Editoriales']);
               $myAutor->SetSeudonimo($autor['Seudonimo']);
               $listaAutores[]=$myAutor;

           }
           return $listaAutores;
           }

        
    
            
        
    }

?>