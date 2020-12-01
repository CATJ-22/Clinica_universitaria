<?php
session_start();
if ($_SESSION['rol'] == "administrativo") {
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
            <a class="navbar-brand" href="bienvenida.php"><img src="../../../Style/Image/utp.png" class="bg-white rounded" alt="" width="50px"> Clinica universitaria</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="bienvenida.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-notes-medical"></i> Administracion de citas solicitadas</a>
                    </li>
                    <li class="nav-item" hidden>
                        <a class="nav-link" href="registroPaciente.php"><i class="fas fa-file-signature"></i> Registar informacion del paciente</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION['nombre'] ?>[<?php echo $_SESSION['rol'] ?>] <img src="../../../Style/Image/adminstrativo.svg" class="rounded-circle z-depth-0" alt="avatar image" style="width: 35px;">
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
        <div class="col">
    <div class="row mt-5 d-flex justify-content-center">
            <div class="col-8">
                <h1 class="text-center title mb-5">Administracion de Citas Solicitadas</h1>
                <h3 class="text-center title ">Por Revizar</h3>
                <table id="example" class="display text-center  table-bordered border-dark " data-page-length="5" width="100%"></table>
            </div>
            <div class="w-100"></div>
            <div class="col-8">
            <h3 class="text-center title ">Aprovadas</h3>
                <table id="example2" class="display text-center  table-bordered border-dark compact" data-page-length="5" width="100%"></table>
            </div>
        </div>
        </div>
    </body>

    <?php if (isset($_GET['msg'])) { ?>
        <footer class="col d-flex justify-content-end fixed-bottom">
            <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false" style="margin-bottom: 1%;">
                <div class="toast-header bg-info text-white">
                    <div class="col d-flex justify-content-start">
                        <img class=" rounded mr-2 " width="20" height="20" src="../../../Style/Image/informacion.svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <strong class="">AVISO!!!</strong>
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
    include('../../../Procesos/administrativo/citastData_P.php');
    
    ?>
    <script>
        $(document).ready(function() {
            verInfoClienteR(<?php echo json_encode($revision); ?>);
            verInfoClienteA(<?php echo json_encode($aprovadas); ?>);
            $('.toast').toast('show')
        });

        function verInfoClienteR(data) {
            $('#example').DataTable({
                data: data,
                columns: [
                    {
                        title: 'Nombre',
                        width: "90px",
                        data:"7"
                    },
                    {
                        title: "Cedula",
                        width: "70px",
                        data: "1"
                    },
                    {
                        title: "Tipo de Cita",
                        width: "95px",
                        data: "2"
                    },
                    {
                        title: "Fecha",
                        width: "70px",
                        data: "3"
                    },
                    {
                        title: "Hora",
                        width: "50px",
                        data: "4"
                    },
                    {
                        title: "Observación",
                        data: "5"
                    },
                    {
                        title: "Estado",
                        width: "90px",
                        data: "6",
                        render: function(data, type, row, meta) {
                            if (data === "revision") {
                                return '<div class=" alert-warning text-center text-dark h-25" role="alert"><i class="far fa-clock"></i><b> ' + data + '</b></div>';
                            }
                        }
                    },
                    {
                        title: "Acción",
                        width: "180px",
                        data: "0",
                        render: function(data, type, row, meta) {
                                return '<div class="col d-flex justify-content-center"><div class="w-50 rounded btn-success mr-1"><a href="../../../Procesos/administrativo/estadoCita_P.php?tipo=AR&id='+data+'&estado=aprovado" class=" text-center text-white h-25" ><b>Aprovar</b></a></div><div class="w-50 rounded btn-danger"><a href="../../../Procesos/administrativo/estadoCita_P.php?tipo=AR&id='+data+'&estado=rechazado" class="text-center text-white h-25" ><b>Rechazar</b></a></div></div>';
                                
                        }
                    }
                ],
                lengthMenu:"5",
                "language": {
                    "lengthMenu": "Mostrar _MENU_ filas por paginas",
                    "zeroRecords": "No encontrado - Lo sentimos",
                    "info": "Mostrando pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "0 Entardas Disponibles",
                    "infoFiltered": "(Filtrando: _MAX_ total de entradas)"
                }
            });
        }
        function verInfoClienteA(data) {
            $('#example2').DataTable({
                data: data,
                columns: [
                    {
                        title: 'Nombre',
                        width: "90px",
                        data:"7"
                    },
                    {
                        title: "Cedula",
                        width: "70px",
                        data: "1"
                    },
                    {
                        title: "Tipo de Cita",
                        width: "90px",
                        data: "2"
                    },
                    {
                        title: "Fecha",
                        width: "70px",
                        data: "3"
                    },
                    {
                        title: "Hora",
                        width: "50px",
                        data: "4"
                    },
                    {
                        title: "Observación",
                        data: "5"
                    },
                    {
                        title: "Estado",
                        width: "100px",
                        data: "6",
                        render: function(data, type, row, meta) {
                            if (data === "aprovado") {
                                return '<div class="alert-success text-center text-dark h-25" role="alert"><i class="far fa-check-circle"></i><b> ' + data + '</b></div>';
                            }
                        }
                    },
                    {
                        title: "Acción",
                        width: "180px",
                        data: "0",
                        render: function(data, type, row, meta) {
                                return '<div class="col d-flex justify-content-center"><div class="w-50 rounded btn-success mr-1"><a href="../../../Procesos/administrativo/estadoCita_P.php?tipo=AA&id='+data+'&estado=atendido" class=" text-center text-white h-25" ><b>Atendido</b></a></div><div class="w-50 rounded btn-warning"><a href="../../../Procesos/administrativo/estadoCita_P.php?tipo=AA&id='+data+'&estado=ausente" class=" text-center text-white h-25" ><b>Ausente</b></a></div></div>';
                            
                        }
                    }
                ],
                lengthMenu: "5",
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