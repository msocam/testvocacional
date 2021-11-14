<?php

$conexion=mysqli_connect('localhost','root','','test_vocacional');
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/registro.css">
    <title id="titulo-test">Test Vocacional </title>
</head>
<body>
    <section class="sct_register">
        <?php if(isset($_SESSION['error_alert'])):?>
        <div class="row">
            <div class="col-lg-4">
                <div class="bs-component">
                <div class="alert alert-dismissible alert-danger">
                    <strong style="color: red; ">HAY UN ERROR!</strong> <?=$_SESSION['error_alert']?>
                </div>
                </div>
            </div>  
        </div>
        <a style="color: red;"><?php 
            endif;
            $_SESSION['error_alert'] = null;
			unset($_SESSION['error_alert']);
        ?></a>
     
        <form action="php/verificar_dni.php" method="POST" class="form_register">
            <h4 id="titulo-body">Registro de Test Vocacional</h4>
            <input class="txtbox_form_register" type="text" name="apellidos" placeholder="Apellidos" required>
            <input class="txtbox_form_register" type="text" name="nombres" placeholder="Nombres" required>
            <input class="txtbox_form_register" type="email" name="correo" placeholder="Correo Electronico" required>
            <input class="txtbox_form_register" type="number" name="dni" placeholder="DNI" required>
            <input class="txtbox_form_register" type="number" name="edad" placeholder="Edad" required>
            <input class="txtbox_form_register" type="text" name="distrito" placeholder="Distrito donde reside" required>
            <input class="txtbox_form_register" type="text" name="carrera" placeholder="Carrera que le gustaria seguir" required>
            <button class="btn_form_register">
                Realizar test
            </button>
        </form>
    </section>
</body>
</html>

