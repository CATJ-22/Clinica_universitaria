<?php
include('../database/conexion_DB.php');
$tipo = $_REQUEST['tipo'];
$id = $_REQUEST['id'];
//actualizacion de estado de cita en base a si fue atendido o no.
if ($tipo == "AR") {
    $estado = $_REQUEST['estado'];
    $sql = "UPDATE solicitudes SET Estado='" . $estado . "' WHERE id=" . $id;
    if (mysqli_query($conn, $sql)) {
        header('Location: ../../Pages/web/administrativo/administracion.php?msg=Se ha ' . $estado . ' exitosamente la cita');
    }
} else {
    $estado = $_REQUEST['estado'];
    $sql = "UPDATE solicitudes SET Estado='" . $estado . "' WHERE id=" . $id;
    if (mysqli_query($conn, $sql)) {
        header('Location: ../../Pages/web/administrativo/administracion.php?msg=Paciente ' . $estado . ', Estado de la cita Guardado exitosamente');
    }
}
