<?php
if (isset($_SESSION['cedula'])) {
    include('../../../Procesos/database/conexion_DB.php');
    $cedula = $_SESSION['cedula'];
    $sql = "SELECT Cedula, Cita, Dia, Hora, Observacion, Estado, Id from solicitudes where Cedula='$cedula' AND CONCAT(dia,' ',hora) > NOW() AND Estado<>'atendido'";
    $result = mysqli_query($conn, $sql);
    $info = mysqli_fetch_all($result);
} else {
    include('../database/conexion_DB.php');
    if (isset($_REQUEST['correo'])) {
        $email = $_REQUEST['correo'];
        $sql = "SELECT Cedula FROM usuarios WHERE Correo='$email'";
        $result = mysqli_query($conn, $sql);
        $cedula = mysqli_fetch_row($result);
        $sql = "SELECT Cedula, Cita, CONCAT(Dia, ' ',Hora) as fecha, Observacion, Estado from solicitudes where Cedula='$cedula[0]' AND CONCAT(dia,' ',hora) > NOW() AND Estado<>'ausente' AND Estado<>'atendido'";
        $result = mysqli_query($conn, $sql);
        //$data = mysqli_fetch_assoc($result);
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[]= $row;
        }
        header("Content-Type: application/json; charset=UTF-8");
        echo json_encode($data);
    } else {
        var_dump(http_response_code(404));
    }
}
