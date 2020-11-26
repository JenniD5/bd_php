<?php
//incluir las clases libro y crud_libro

require_once('crud_autor.php');//obtener clase crud_libro
require_once('autor.php');//obtener clase libro 

//inicializar
$crud = new CrudAutor();
$autor = new Autor();

// si el elemento a insertar no viene nulo, llama al crud e inserta un libro 
if (isset($_POST['insertar'])){
    $autor->setNombre($_POST['nombre']);
    $autor->setApellido($_POST{'apellido'});
    $autor->setNacionalidad($_POST['nacionalidad']);
    $autor->setNacimiento($_POST['nacimiento']);
    $autor->setLibros($_POST{'libros'});
    $autor->setSagas($_POST['sagas']);
    $autor->setEditoriales($_POST['editoriales']);
    $autor->setSeudonimo($_POST{'seudonimo'});
   
    //llama a la funcion insertar definida en el crud si todo se obtuvo correctamente 
    $crud->insertar($autor);
    header('Location: index_autor.php');

}

?>