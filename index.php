<?php
session_start();
if ($_SESSION) {
    unset($_SESSION['rol']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/css/mdb.min.css">
    <link rel="stylesheet" href="lib/css/style.css">
    <link rel="stylesheet" href="Style/css/index.css">
    <!--Scripts -->
    <script type="text/javascript" src="lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="lib/js/popper.min.js"></script>
    <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/js/mdb.min.js"></script>
    <title>Clinica Universitaria</title>
</head>
<header>
    <div class="col text-center mleft">
        <div class="row border rounded border-light title">
            <div class="col-sm-1 mt-3 mb-3">
                <img src="Style/Image/utp.png" alt="" width="100px">
            </div>
            <div class="col mb-3 mt-3">
                <h1>Universidad Tecnologica de Panamá</h1>
                <h3>Clinica Universitaria</h3>
            </div>
        </div>
    </div>
</header>

<body class="w-100">
    <div class="container-xl">
        <div class="col-md-8 login">

            <form class="text-center border rounded border-light p-5 bg-white" action="Procesos/auth/login_P.php" method="POST">
                <p class="h4 mb-4">Inicio de sesion</p>
                <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?>
                <!-- Email -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3"><i class="fas fa-envelope prefix"></i></span>
                    </div>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="example@utp.ac.pa" style="width: 22rem !important;">
                </div>

                <!-- Password -->
                <div class="input-group mb-3">
                    <input id="contrasena" name="contrasena" type="password" class="form-control" placeholder="**********">
                    <div class="input-group-append">
                        <button type="button" class="btn-primary input-group-text showpass" id="basic-addon2"><i id="eyeopen" class="fas fa-eye prefix"></i><i id="eyeclose" class="fas fa-eye-slash prefix" hidden></i></button>
                    </div>
                </div>
                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="recordme" name="recordar">
                            <label class="custom-control-label" for="recordme">Recordarme</label>
                        </div>
                    </div>
                </div>


                <!-- Sign in button -->
                <button class="btn btn-block my-4" type="submit">Iniciar Sesión</button>

                <!-- Register -->
                <p>No tienes cuenta?
                    <a href="Pages/auth/registro.php">Registrate</a> <br>
                    <a href="">Olvidaste tu contraseña?</a>
                </p>


            </form>
            <!-- Default form login -->
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {});
    setTimeout(function() {
        $(".alert").fadeOut(1500);
    }, 3000);

    $("#contrasena").change(function() {
        var a = document.getElementById('recordme').value;
        console.log(a);
    });

    $("#basic-addon2").click(function() {
        var tipo = document.getElementById("contrasena");
        if (tipo.type == "password") {
            $("#contrasena").attr("type", "text");
            $("#eyeclose").removeAttr("hidden");
            $("#eyeopen").hide();
            $("#basic-addon2").removeClass("showpass").addClass("hidepass");
        } else {
            $("#contrasena").attr("type", "password");
            $("#eyeopen").show();
            $("#eyeclose").attr("hidden", "");
            $("#basic-addon2").removeClass("hidepass").addClass("showpass");
        }
    });
</script>