<?php
session_start();
include('../database/conexion_DB.php');

if (isset ($_GET['id'])){
    $id=$_GET["id"];

    //Insertar Datos en BD
    $sql = "DELETE FROM solicitudes WHERE id = '$id'";
    if(mysqli_query($conn,$sql)){
        header('Location: ../../Pages/web/usuario/historial.php?msg=Se ha borrado exitosamente la cita');
    }
}else
    echo "No se ha podido eliminar la cita correctamente.";

    mysqli_close($conn);
