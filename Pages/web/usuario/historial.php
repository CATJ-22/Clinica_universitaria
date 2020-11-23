<?php
session_start();
if ($_SESSION['rol'] == "usuario") {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Styles -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="../../../lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../lib/css/mdb.min.css">
        <link rel="stylesheet" href="../../../lib/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../../../lib/css/style.css">
        <link rel="stylesheet" href="../../../Style/css/index.css">
        <!--Scripts -->
        <script type="text/javascript" src="../../../lib/js/jquery.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/popper.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/mdb.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/jquery.dataTables.min.js"></script>
        <title>Clinica Universitaria</title>
    </head>
    <header>
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
            <a class="navbar-brand mr-5 title" href="bienvenida.php"><img src="../../../Style/Image/utp.png" class="bg-white rounded" alt="" width="50px"> Clinica universitaria</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="bienvenida.php"><i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="solicitud.php"><i class="fas fa-clipboard-list"></i> Solicitud de citas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="historial.php"><i class="fas fa-history"></i> Historial de citas solicitadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://utp.ac.pa/clinica-universitaria"><i class="fas fa-info"></i> Información sobre la clinica</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION['nombre'] ?>[<?php echo $_SESSION['rol'] ?>] <img src="../../../Style/Image/usuario.svg" class="rounded-circle z-depth-0" alt="avatar image" style="width: 35px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                            <a class="dropdown-item" href="../../auth/actualizar.php"><i class="fas fa-user-edit"></i> Editar Pefil</a>
                            <a class="dropdown-item" href="../../../index.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/.Navbar -->
    </header>

    <body>
        <div class="col mt-5 d-flex justify-content-center">
            <div class="col-6">
                <h1 class="text-center title mb-5">Historial de Consultas</h1>
                <table id="example" class="display text-center  table-bordered border-dark compact" width="100%"></table>
            </div>
        </div>
        
    </body>

    <?php if (isset($_GET['msg'])) { ?>
        <footer class="col d-flex justify-content-end fixed-bottom">
            <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false" style="margin-bottom: 1%;">
                <div class="toast-header bg-info text-white">
                    <div class="col d-flex justify-content-start">
                        <img class=" rounded mr-2 " width="20" height="20" src="../../../Style/Image/informacion.svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <strong class="mr- ">AVISO!!!</strong>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="toast-body"><?php echo $_GET['msg']; ?></div>
            </div>
        </footer>
    <?php } ?>

    </html>
    <?php
    include('../../../Procesos/database/conexion_DB.php');
    $cedula = $_SESSION['cedula'];
    $sql = "SELECT Cedula, Cita, Dia, Hora, Observacion, Estado, Id from solicitudes where Cedula='$cedula'";
    $result = mysqli_query($conn, $sql);
    $info = mysqli_fetch_all($result);
    ?>
    <script>
        $(document).ready(function() {
            verInfoCliente(<?php echo json_encode($info); ?>);
            $('.toast').toast('show')
        });

        function verInfoCliente(data) {
            $('#example').DataTable({
                data: data,
                columns: [
                    {
                        title: '<i class="far fa-calendar-times"></i>',
                        width: "5px",
                        data: "6",
                        render: function(data, type, row, meta) {
                            if (row[5] === "rechazado") {
                                return '<a class=" rounded text-center text-danger" style="font-size: 20px;" href="../../../Procesos/usuario/eliminarCita_P.php?id='+data+'"><i class="far fa-calendar-times"></i></a>';
                            }else{
                                return '<a class=" rounded text-center text-danger" href="../../../Procesos/usuario/eliminarCita_P.php?id='+data+'" hidden><i class="far fa-calendar-times"></i></a>';
                            }
                        }
                    },
                    {
                        title: "Cedula",
                        width: "70px",
                        data: "0"
                    },
                    {
                        title: "Tipo de Cita",
                        data: "1"
                    },
                    {
                        title: "Fecha",
                        width: "70px",
                        data: "2"
                    },
                    {
                        title: "Hora",
                        width: "50px",
                        data: "3"
                    },
                    {
                        title: "Observación",
                        data: "4"
                    },
                    {
                        title: "Estado",
                        width: "30px",
                        data: "5",
                        render: function(data, type, row, meta) {
                            if (data === "revision") {
                                return '<div class="alert alert-warning text-center" role="alert">' + data + '</div>';
                            } else if (data === "aprovado") {
                                return '<div class="alert alert-success" role="alert">' + data + '</div>';
                            } else if (data === "rechazado") {
                                return '<div class="alert alert-danger" role="alert">' + data + '</div>';
                            }

                        }
                    }
                ],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ filas por paginas",
                    "zeroRecords": "No encontrado - Lo sentimos",
                    "info": "Mostrando pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "0 Entardas Disponibles",
                    "infoFiltered": "(Filtrando: _MAX_ total de entradas)"
                }
            });
        }
    </script>
<?php
}
?>