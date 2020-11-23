<?php
//incluir las clases libro y crud_libro

require_once('crud_libro.php');//obtener clase crud_libro
require_once('libro.php');//obtener clase libro 

//inicializar
$crud = new CrudLibro();
$libro = new Libro();

// si el elemento a insertar no viene nulo, llama al crud e inserta un libro 
if (isset($_POST['insertar'])){
    $libro->setNombre($_POST['nombre']);
    $libro->setAutor($_POST{'autor'});
    $libro->setEdicion($_POST['edicion']);
    //llama a la funcion insertar definida en el crud si todo se obtuvo correctamente 
    $crud->insertar($libro);
    header('Location: index.php');

}

?>