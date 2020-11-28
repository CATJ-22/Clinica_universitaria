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
            <a class="navbar-brand" href="bienvenida.php"><img src="../../../Style/Image/utp.png" class="bg-white rounded" alt="" width="50px"> Clinica universitaria</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="administracion.php"><i class="fas fa-notes-medical"></i> Administracion de citas solicitadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-file-signature"></i> Registrar informacion del paciente</a>
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
        <div id="div-content" class="row mt-5 row-cols-2 d-flex justify-content-center">
            <div class="col d-flex justify-content-end mb-3">
                <!-- Card -->
                <div class="card" style="width: 30rem;">
                    <div class="card-header">
                        <!--Title-->
                        <h2 class="card-title title text-center"><b>Total de Pacientes Atendidos o Ausentados y Citas Por Revisar</b></h2>
                    </div>
                    <!--Card content-->
                    <div class="card-body ">
                        <div class="mb-5"></div>
                        <!--Text-->
                        <canvas id="labelChart1" ></canvas>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col d-fle mb-3">
                <!-- Card -->
                <div class="card" style="width: 30rem;">

                    <!--Card image-->
                    <div class="view overlay d-flex justify-content-center">
                        <img class="card-img-top img-fluid " style="width: 70%;" src="https://images-na.ssl-images-amazon.com/images/I/517RjQaFZ3L.png" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Más Caracteristicas en camino!!</h4>
                        <!--Text-->
                        <p class="card-text">Trabajo en Progreso.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md" disabled>Muy pronto...</button>

                    </div>

                </div>
                <!-- Card -->
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
    <?php include('../../../Procesos/administrativo/widgetBienvenida_P.php'); ?>
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

        var ctxP = document.getElementById("labelChart1").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            plugins: [ChartDataLabels],
            type: 'pie',
            data: {
                labels: ["Atendido", "Ausentado", "Por Revisar"],
                datasets: [{
                    data: [<?php echo $data; ?>],
                    backgroundColor: ["#46BFBD", "#FDB45C", "#616774"],
                    hoverBackgroundColor: ["#5AD3D1", "#FFC870", "#A8B3C5"]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'right',
                    labels: {
                        padding: 20,
                        boxWidth: 10
                    }
                },
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = (value * 100 / sum).toFixed(2) + "%";
                            return percentage;
                        },
                        color: 'white',
                        labels: {
                            title: {
                                font: {
                                    size: '16'
                                }
                            }
                        }
                    }
                }
            }
        });
    </script>
<?php
}
?>