<?php
include('../../../Procesos/database/conexion_DB.php');

$sql = "SELECT solicitudes.id, solicitudes.Cedula, Cita, Dia, Hora, Observacion, Estado, CONCAT(usuarios.Nombre,' ', usuarios.Apellido) from solicitudes INNER JOIN usuarios ON solicitudes.Cedula = usuarios.Cedula WHERE Estado='atendido' AND CONCAT(dia,' ',hora) > NOW()";
$result = mysqli_query($conn, $sql);
$revision = mysqli_fetch_all($result);

$sql = "SELECT solicitudes.Cedula, Cita, Dia, Hora, Observacion, Estado, CONCAT(usuarios.Nombre,' ', usuarios.Apellido) from solicitudes INNER JOIN usuarios ON solicitudes.Cedula = usuarios.Cedula WHERE Estado='aprovado' AND CONCAT(dia,' ',hora) > NOW()";
$result = mysqli_query($conn, $sql);
$aprovadas = mysqli_fetch_all($result);