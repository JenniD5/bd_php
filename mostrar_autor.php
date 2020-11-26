<?php
//incluye la clase Libro y CrudLibro
require_once('crud_autor.php');
require_once('autor.php');
$crud=new CrudAutor();
$autor= new Autor();
//obtiene todos los libros con el método mostrar de la clase crud
$listaAutores=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar Autores</title>
</head>
<body  background="fondo.jpg", style="font-family: Arial; margin:170px; margin-left: 310px;">
	<table border=2 ,  bordercolor="blue", cellspacing=4 , style="margin-top:150px;">
		<head>
		
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Nacimiento</td>
			<td>Nacionalidad</td>
			<td>Libros escritos</td>
			<td>Sagas publicadas</td>
			<td>Seudonimo</td>
			<td>Editorial con la que trabaja</td>
			
			
		</head>
		<body>
			<?php foreach ($listaAutores as $autor) {?>
			<tr>
				<td><?php echo $autor->getNombre() ?></td>
				<td><?php echo $autor->getApellido() ?></td>
				<td><?php echo $autor->getNacimiento()?> </td>
				<td><?php echo $autor->getNacionalidad() ?></td>
				<td><?php echo $autor->getLibros() ?></td>
				<td><?php echo $autor->getSagas()?> </td>
				<td><?php echo $autor->getSeudonimo() ?></td>
				<td><?php echo $autor->getEditoriales() ?></td>
				</tr>
			<?php }?>
		</body>
	</table>
	<a href="index_autor.php">Volver</a>
</body>
</html>