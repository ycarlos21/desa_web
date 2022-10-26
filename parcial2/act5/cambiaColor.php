<!--Autor: Carlos Benito Ramirez Vazquez 5 PM
    Actividad: Cambiar color de palabras por php
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5</title>
</head>
<body>
    <h1 id="header" >Soy una simple página!!! ._.</h1>    
    <button id="btn-amarillo" style="background-color: yellow;" onmouseover="amarillo()">Yellow</button>
    <button id="btn-rosa" style="background-color: pink;" onmouseover="rosa()">Pink</button>
    <button id="btn-gris" style="background-color: grey;" onmouseover="gris()">Grey</button>

    <script>
        function amarillo(){
            //alert("Ouch soy yellow")
            document.getElementById("header").style.backgroundColor ="yellow";
        }

        function rosa(){
            //alert("Ouch soy pink")
            document.getElementById("header").style.backgroundColor ="pink";
        }

        function gris(){
            //alert("Ouch soy grey")
            document.getElementById("header").style.backgroundColor ="grey";
        }
    </script>
</body>
</html>
