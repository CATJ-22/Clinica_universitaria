<?php
include('../database/conexion_DB.php');

if (isset ($_REQUEST['nombre'])&& isset($_REQUEST['apellido'])&& isset($_REQUEST['cedula'])&& isset($_REQUEST['correo'])&& isset($_REQUEST['edad'])&& isset($_REQUEST['contrasena'])){
    $nombre=$_REQUEST['nombre'];
    $apellido=$_REQUEST['apellido'];
    $cedula=$_REQUEST['cedula'];
    $edad=$_REQUEST['edad'];
    $correo=$_REQUEST['correo'];
    $pass=md5($_REQUEST['contrasena']);
    $rol="usuario";

    //Verificar Correo
    $sql="SELECT Correo from usuarios where Correo='$correo'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        header('Location: ../../Pages/auth/registro.php?msg=Este correo ya existe en nuestros registros');

    }else{
        //Insertar Datos en BD
        $sql = "INSERT INTO usuarios (Nombre, Apellido, Cedula, Edad, Correo, Pass, Rol) VALUES ('$nombre', '$apellido', '$cedula', '$edad', '$correo', '$pass', '$rol')";
        if(mysqli_query($conn,$sql)){
            header('Location: ../../index.php?msg=Se ha registrado exitosamente sus datos');
        }
    }

}else
    echo "No se ha podido guardar sus datos correctamente.";

    mysqli_close($conn);
