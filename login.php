<?php

$conexion=mysqli_connect('localhost','root','','test_vocacional');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title id="titulo-test">Administrador</title>
</head>
<body>
    <section class="sct_login">
        <form action="php/validar_admin.php" method="POST" class="form_login">
            <h4 class="titulo_login">Administrador</h4>
            <img src="Imagenes/usuario.png">
            <input class="txtbox_form_login" type="text" name="usuario" placeholder="Usuario" required>
            <input class="txtbox_form_login" type="password" name="contrasena" placeholder="Contraseña" required>
            <button class="botons">
                Ingresar
            </button> 
        </form>
    </section>
</body>
</html>