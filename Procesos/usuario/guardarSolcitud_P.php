<?php
session_start();
include('../database/conexion_DB.php');

if (isset($_REQUEST['cita']) && isset($_REQUEST['dia']) && isset($_REQUEST['hora']) && isset($_REQUEST['observe'])) {
    $cedula = $_SESSION["cedula"];
    $cita = $_REQUEST['cita'];
    $dia = $_REQUEST['dia'];
    $hora = $_REQUEST['hora'];
    $observe = $_REQUEST['observe'];
    $sql = "SELECT * FROM solicitudes WHERE Dia='" . $dia . "' AND Hora='" . $hora . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    if ($row == null) {
        //Insertar Datos en BD
        $sql = "INSERT INTO solicitudes (Cedula,Cita, Dia, Hora, Observacion, Estado) VALUES ('$cedula','$cita', '$dia', '$hora', '$observe','aprovado')";
        if (mysqli_query($conn, $sql)) {
            header('Location: ../../Pages/web/usuario/bienvenida.php?msg=Se ha registrado exitosamente su cita');
        }
    }else{
        header('Location: ../../Pages/web/usuario/solicitud.php?msg=la fecha o hora elegida ya fue ocupada');
    }
} else
    echo "No se ha podido guardar sus datos correctamente.";

mysqli_close($conn);
