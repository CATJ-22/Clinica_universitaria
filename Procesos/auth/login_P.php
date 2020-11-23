<?php
session_start();
include('../database/conexion_DB.php'); //elemento del lenguaje PHP que nos permite incluir una página entera dentro de otra

if (isset($_REQUEST['correo']) && isset($_REQUEST['contrasena'])) {
    //echo "sí esta definida";
    $email = $_REQUEST['correo'];
    $pass = md5($_REQUEST['contrasena']);

    //------------------- Verificamos con la BD
    $sql = "SELECT Nombre, Apellido, Rol FROM usuarios WHERE Correo='$email' and Pass = '$pass'";
    $rol = mysqli_query($conn, $sql);
    $result = mysqli_fetch_row($rol);
    //-------------------------------------

    if (isset($result[0])) {
        $_SESSION['rol'] = $result[2];
        $_SESSION['nombre'] = "$result[0] $result[1] ";
        if($_SESSION['rol']=="usuario"){
        header('location:../../Pages/web/usuario/bienvenida.php');
        }else{
            header('location:../../Pages/web/administrativo/bienvenida.php');
        }
    } else {
        header('Location: ../../index.php?msg=Correo o Contraseña incorrecta, intente otra vez');
        exit;
    }
}
