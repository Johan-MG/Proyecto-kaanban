<?php
    $usuario=$_POST['Usuario'];
    $correo=$_POST['Correo'];
    $Rol=$_POST['Rol'];
    session_start();

    $_SESSION['Usuario'] = $usuario;
    $_SESSION['Correo'] = $correo;
    $_SESSION['Rol'] = $Rol;
    header('location:../../mainmenu.php');
?>