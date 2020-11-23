<?php
session_start();
include('../database/conexion_DB.php');

if (isset ($_REQUEST['cita'])&& isset($_REQUEST['dia'])&& isset($_REQUEST['hora'])&& isset($_REQUEST['observe'])){
    $cedula=$_SESSION["cedula"];
    $cita=$_REQUEST['cita'];
    $dia=$_REQUEST['dia'];
    $hora=$_REQUEST['hora'];
    $observe=$_REQUEST['observe'];

    //Insertar Datos en BD
    $sql = "INSERT INTO solicitudes (Cedula,Cita, Dia, Hora, Observacion, Estado) VALUES ('$cedula','$cita', '$dia', '$hora', '$observe','revision')";
    if(mysqli_query($conn,$sql)){
        header('Location: ../../Pages/web/usuario/bienvenida.php?msg=Se ha registrado exitosamente su cita');
    }
}else
    echo "No se ha podido guardar sus datos correctamente.";

    mysqli_close($conn);
