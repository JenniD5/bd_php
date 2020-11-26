<html> 
<head>
<title>INGRESAR LIBROS</title>
</head>

<body background="fondo.jpg", style="font-family: Arial; margin:170px; margin-left: 590px;">

<header><h2>Ingresar los datos del autor</h2></header>
    <form action="administrar_autor.php" method="post"> 
    <form action="administrar_autor_mostrar.php" method="select"> 
        <table  style="margin-top:100px;">
            <tr>
                <td>Nombre del Autor</td>
                <td><input type="text" name="nombre"></td>
            </tr>

            <tr>
                <td>Apellido del Autor</td>
                <td><input type="text" name="apellido"></td>

            </tr>

            <tr>
                <td>Nacionalidad del Autor</td>
                <td><input type="text" name="nacionalidad"></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento del Autor</td>
                <td><input type="text" name="nacimiento"></td>
            </tr>
            <tr>
                <td>Cantidad de libros que poseé el Autor</td>
                <td><input type="text" name="libros"></td>
            </tr>
            <tr>
                <td>Nombre de las sagas del autor</td>
                <td><input type="text" name="sagas"></td>
            </tr>
            <tr>
                <td>Nombre de las editoriales con las que trabaja</td>
                <td><input type="text" name="editoriales"></td>
            </tr>
            <tr>
                <td>Seudonimo con el que se le conocer</td>
                <td><input type="text" name="seudonimo"></td>
            </tr>
            


            <input type="hidden" name="insertar" value="insertar">

        </table>
        <input type="submit" value="Guardar">
        <a href="index_autor.php">Volver</a>
    </form>
</body>
</html>