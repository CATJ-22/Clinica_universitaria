<?php
session_start();
include('../database/conexion_DB.php');

if (isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['cedula']) && isset($_REQUEST['correo']) && isset($_REQUEST['edad']) && isset($_REQUEST['contrasena'])) {
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $cedula = $_REQUEST['cedula'];
    $edad = $_REQUEST['edad'];
    $correo = $_REQUEST['correo'];
    if ($_REQUEST['oldpw'] = !$_REQUEST['contrasena']) {
        $pass = md5($_REQUEST['contrasena']);
    }

    //se valida la contraseña  y dependiendo del resultado se actualiza con contraseña o sin contraseña
    if ($_REQUEST['oldpw'] = !$_REQUEST['contrasena']) {
        $sql = "UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido', Cedula='$cedula', Edad='$edad', Correo='$correo', Pass='$Pass' where Id='$id'";
        if (mysqli_query($conn, $sql)) {
            if ($_SESSION['rol'] == "usuario") {
                $_SESSION['cedula']=$cedula;
                header('Location: ../../Pages/web/usuario/bienvenida.php?msg=Se actualizaron correctamente sus datos');
            }else{
                header('Location: ../../Pages/web/administrativo/bienvenida.php?msg=Se actualizaron correctamente sus datos');
            }
        }
    } else {
        $sql = "UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido', Cedula='$cedula', Edad='$edad', Correo='$correo' where Id='$id'";
        if (mysqli_query($conn, $sql)) {
            if ($_SESSION['rol'] == "usuario") {
                header('Location: ../../Pages/web/usuario/bienvenida.php?msg=Se actualizaron correctamente sus datos');
            }else{
                header('Location: ../../Pages/web/administrativo/bienvenida.php?msg=Se actualizaron correctamente sus datos');
            }
        }
    }
} else
    echo "No se ha podido guardar sus datos correctamente.";

mysqli_close($conn);
