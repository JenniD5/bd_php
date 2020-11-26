<?php
//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro= new Libro();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar Libros</title>
</head>
<body  background="fondo.jpg", style="font-family: Arial; margin:170px; margin-left: 590px;">
	<table border=2,  style="margin-top:150px;", bordercolor="grey", cellspacing=4 ,>
		<head>
			<td>Nombre</td>
			<td>Autor</td>
			<td>Edicion</td>
			
		</head>
		<body>
			<?php foreach ($listaLibros as $libro) {?>
			<tr>
				<td><?php echo $libro->getNombre() ?></td>
				<td><?php echo $libro->getAutor() ?></td>
				<td><?php echo $libro->getEdicion()?> </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>