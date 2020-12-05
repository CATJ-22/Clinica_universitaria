<?php
include('../../../Procesos/database/conexion_DB.php');
//obtencion de datos para las tabalas de administracion de citas en administrativo
$sql = "SELECT solicitudes.id, solicitudes.Cedula, Cita, Dia, Hora, Observacion, Estado, CONCAT(usuarios.Nombre,' ', usuarios.Apellido) from solicitudes INNER JOIN usuarios ON solicitudes.Cedula = usuarios.Cedula WHERE Estado='atendido' AND CONCAT(dia,' ',hora) > NOW()";
$result = mysqli_query($conn, $sql);
$revision = mysqli_fetch_all($result);

$sql = "SELECT solicitudes.id, solicitudes.Cedula, Cita, Dia, Hora, Observacion, Estado, CONCAT(usuarios.Nombre,' ', usuarios.Apellido) from solicitudes INNER JOIN usuarios ON solicitudes.Cedula = usuarios.Cedula WHERE Estado='aprobado' AND CONCAT(dia,' ',hora) > NOW()";
$result = mysqli_query($conn, $sql);
$aprovadas = mysqli_fetch_all($result);
