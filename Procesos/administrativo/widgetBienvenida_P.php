<?php
include('../../../Procesos/database/conexion_DB.php');
//se obtienen datos para cargar la grafica de bienvenida
$sql = "SELECT * from solicitudes WHERE Estado='atendido'";
$result = mysqli_query($conn, $sql);
$atendido = mysqli_num_rows($result);

$sql = "SELECT * from solicitudes WHERE Estado='ausente'";
$result = mysqli_query($conn, $sql);
$ausente = mysqli_num_rows($result);

$sql = "SELECT * from solicitudes WHERE Estado='aprobado'";
$result = mysqli_query($conn, $sql);
$revision = mysqli_num_rows($result);

$data= $atendido.",".$ausente.",".$revision;