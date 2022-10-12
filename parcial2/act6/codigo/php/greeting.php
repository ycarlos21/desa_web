<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleGreetingForm.css" type="text/css">
    <title>Welcome</title>
</head>

<body>

    <?php
    /*Descripcion: Datos Del Formulario
    Autor: Carlos Vazquez
    Fecha: 12/10/2022
    */

    //obtiene nombre del formulario
    $name = $_POST['nombre'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];


    echo "Hello $name";
    echo "</br>";
    echo "Your age is $edad";
    echo "</br>";
    echo "Your phone number is $telefono";
    echo "</br>";
    echo "</br>";
    echo "<a href='../html/greetingForm.html'>Regresar</a>";
    ?>

</body>

</html>