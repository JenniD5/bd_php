<html> 
<head>
<title>INGRESAR LIBROS</title>
</head>

<body  background="fondo.jpg", style="font-family: Arial; margin:170px; margin-left: 590px;">
<header><h2>Ingresar los datos del libro</h2></header>
    <form action="administrar_libro.php" method="post" style="margin-top:100px;"> 
        <table>
            <tr>
                <td>Nombre Libro</td>
                <td><input type="text" name="nombre"></td>
            </tr>

            <tr>
                <td>Autor</td>
                <td><input type="text" name="autor"></td>

            </tr>

            <tr>
                <td>Fecha edición</td>
                <td><input type="text" name="edicion"></td>
            </tr>

            <input type="hidden" name="insertar" value="insertar">

        </table>
        <input type="submit" value="Guardar">
        <a href="index.php">Volver</a>
    </form>
</body>
</html>