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
        <link rel="stylesheet" href="../../../lib/css/style.css">
        <link rel="stylesheet" href="../../../Style/css/index.css">
        <!--Scripts -->
        <script type="text/javascript" src="../../../lib/js/jquery.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/popper.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/mdb.min.js"></script>
        <title>Clinica Universitaria</title>
    </head>
    <header>
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
            <a class="navbar-brand" href="bienvenida.php"><img src="../../../Style/Image/utp.png" class="bg-white rounded" alt="" width="50px">  Clinica universitaria</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="bienvenida.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Solicitud de citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Historial de citas solicitadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://utp.ac.pa/clinica-universitaria">Información sobre la clinica</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION['nombre'] ?>[<?php echo $_SESSION['rol'] ?>] <img src="../../../Style/Image/usuario.svg" class="rounded-circle z-depth-0" alt="avatar image" style="width: 35px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                            <a class="dropdown-item" href="#">Editar Pefil</a>
                            <a class="dropdown-item" href="../../../index.php">Cerrar sesion</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/.Navbar -->
    </header>

    <body>
        <div class="container" style="margin-top: 50px;">
            <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?>
            <h1 class="text-center">SOLICITUD DE CITAS</h1>
            <br>
            <form action="../../../Procesos/usuario/guardarSolcitud_P.php" method="POST">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cita">Tipo de Cita:</label>
                        <input type="text" class="form-control mr-2" id="cita" name="cita" value="Consulta General" readonly>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="dia">Día de Cita:</label>
                        <input id="dia" type="date" class="form-control" name="dia" min="Mo" max="Fr" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="hora">Hora de Cita:</label>
                        <input id="hora" type="time" class="form-control" name="hora" min="08:30" max="15:30" required>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="form-group">
                        <label for="observe">Detalle de Consulta:</label>
                        <textarea id="observe" class="form-control" name="observe" rows="5" cols="50" required></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center" >
                <button type="submit" class="btn btn-default btn-md rounded">Enviar</button>
            </div>
            </form>
        </div>
    </body>

    </html>
    <script>
    $(document).ready(function() {
            var date = new Date();
            var time = date.toISOString();
            var time_split = time.split("T");
            $("#dia").attr("value", time_split[0]);
            $("#dia").attr("min", time_split[0]);
        })
    </script>
<?php
}
?>