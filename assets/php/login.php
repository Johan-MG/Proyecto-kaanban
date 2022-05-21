<?php
    $usuario=$_POST['Usuario'];
    //$Contrasena=$_POST['Contrasena'];
    $Rol=$_POST['Rol'];
    session_start();
    $_SESSION['Usuario'] = $usuario;
    //$_SESSION['Contrasena'] = $Contrasena;
    $_SESSION['Rol'] = $Rol;
    header('location:../../mainmenu.php');
?>