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
        <link rel="stylesheet" href="../../../lib/css/ekko-lightbox.css">
        <link rel="stylesheet" href="../../../Style/css/index.css">
        <!--Scripts -->
        <script type="text/javascript" src="../../../lib/js/jquery.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/popper.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/mdb.min.js"></script>
        <script type="text/javascript" src="../../../lib/js/ekko-lightbox.min.js"></script>
        <title>Clinica Universitaria</title>
    </head>
    <header>
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
            <a class="navbar-brand title mr-5" href="bienvenida.php"><img src="../../../Style/Image/utp.png" class="bg-white rounded" alt="" width="50px"> Clinica universitaria</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="bienvenida.php"><i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="solicitud.php"><i class="fas fa-clipboard-list"></i> Solicitud de citas</a>
                    </li>
                    <li class="nav-item">
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
        <div class="container" style="margin-top: 3%;">
            <div id="div-content" class="row row-cols-2">
                <div class="col mb-5 d-flex justify-content-center">
                    <div class="card" style="width: 30rem;">
                        <div class="card-header title">
                            <h3>Clínica Universitaria</h3>
                        </div>
                        <div class="card-body text-justify">
                            <p class="card-text">La Clínica Universitaria brinda servicios de salud y lleva a cabo actividades clínicas y de capacitación en temas de salud, dirigidas a la comunidad universitaria estudiantil, docente, administrativa y de investigación de la Universidad.</p>
                            <a target="_blank" href="https://utp.ac.pa/clinica-universitaria" class="btn btn-primary">Mas Información</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-5 d-flex justify-content-center">
                    <div class="card" style="width: 30rem;">
                        <div class="card-header title">
                            <h3>Objetivo</h3>
                        </div>
                        <div class="card-body text-justify">
                            <li>Proporcionar al paciente servicios de atención integral para su salud, en lo concerniente a prevención, tratamiento y rehabilitación de enfermedades.</li>
                            <br>
                            <li>Desarrollar actividades inherentes a la promoción de la salud de la comunidad universitaria.</li>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col mb-5 d-flex justify-content-center">
                    <div class="card" style="width: 30rem;">
                        <div class="card-header title">
                            <h3>Funciones</h3>
                        </div>
                        <div class="card-body text-justify">
                            <br>
                            <li>Asistir con atención médica a los estudiantes, docentes, investigadores y personal administrativo de la Universidad.</li>
                            <br>
                            <li>Orientar a pacientes acerca de su enfermedad, tratamiento, medicamento y efectos secundarios.</li>
                            <br>
                            <li>Dar atención primaria (preventiva) en salud e higiene a través de acciones de capacitación sobre diferentes patologías infectocontagiosas u otras enfermedades.</li>
                            <br>
                            <li>Realizar un plan anual de trabajo para desarrollar mejores niveles de atención en la clínica.</li>
                        </div>
                    </div>
                </div>
                <div class="col mb-5 d-flex justify-content-center">
                    <div class="card" style="width: 30rem;">
                        <a href="../../../Style/Image/ubicacion.png" data-toggle="lightbox" data-title="Ubicacion de la Clinica"><img src="../../../Style/Image/ubicacion.png" class="card-img-top img-fluid" alt="..."></a>
                        <div class="card-body">
                            <p class="card-text"><b>Dirección:</b> Universidad Tecnológica de Panamá, Avenida Ricardo J. Alfaro, Campus Metropolitano Dr. Víctor Levi Sasso, Edificio Administrativo.</p>
                            <a target="_blank" href="https://www.google.com/maps/place/9%C2%B001'13.8%22N+79%C2%B031'59.4%22W/@9.0228371,-79.5349309,16z/data=!4m5!3m4!1s0x0:0x0!8m2!3d9.020505!4d-79.5331778" class="btn btn-primary">Ubicación</a>
                        </div>
                    </div>
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
    <script>
        $(document).ready(function() {
            $('.toast').toast('show')
            if (screen.width < 768){
                $("#div-content").removeClass("row-cols-2").addClass("row-cols-1");
            }
        });

        $(window).resize(function() {
            if (screen.width < 768){
                $("#div-content").removeClass("row-cols-2").addClass("row-cols-1");
            }else{
                $("#div-content").removeClass("row-cols-1").addClass("row-cols-2");
            }
        });

        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
<?php
}
?>