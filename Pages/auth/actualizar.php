<?php
session_start();
include('../../Procesos/database/conexion_DB.php');
$n = $_SESSION['nombre'];
$nombre = explode(" ", $n);
$sql = "SELECT * from usuarios where Nombre='$nombre[0]'";
$result = mysqli_query($conn, $sql);
$info = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="../../lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../lib/css/mdb.min.css">
    <link rel="stylesheet" href="../../lib/css/style.css">
    <link rel="stylesheet" href="../../Style/css/index.css">
    <!--Scripts -->
    <script type="text/javascript" src="../../lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../lib/js/popper.min.js"></script>
    <script type="text/javascript" src="../../lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../lib/js/mdb.min.js"></script>
    <title>Clinica Universitaria</title>
</head>
<header>
    <div class="col text-center d-flex justify-content-center">
        <div class="row border rounded border-light title bg-white z-depth-5"">
            <div class="col-sm-1 mt-3 mr-3 mb-3">
                <img src="../../Style/Image/utp.png" alt="" width="100px">
            </div>
            <div class="col mt-3 mr-3 mb-3">
                <h1>Universidad Tecnologica de Panamá</h1>
                <h3>Clinica Universitaria</h3>
            </div>
        </div>
    </div>
</header>
<body>
    <div class="col d-flex justify-content-center ">
        <div id="div-content" class="col regist" style="max-width: 50rem;">
<form action="../../Procesos/auth/actualizar_P.php" class="text-center border border-light p-5 bg-white z-depth-5"" method="post" onsubmit="VerificarClave()">
            <div class="row"> <a class="btn " onclick="history.back()"><i class="fas fa-chevron-left prefix"></i> VOLVER</a></div>
            <p class="h4 mb-4">Actualizacion de Perfil</p>
            <div class="row">
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="nombre">Nombre</label>
                    </div>
                    <div class="input-group">
                        <input id="id" name="id" type="text" value="<?php echo $info[0] ?>" class="form-control" placeholder="id" hidden>
                        <input id="nombre" name="nombre" value="<?php echo $info[1] ?>" type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                </div>
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="apellido">Apellido</label>
                    </div>
                    <div class="input-group mb-3">
                        <input id="apellido" name="apellido" type="text" value="<?php echo $info[2] ?>" class="form-control" placeholder="Apellido" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="cedula">Cedula</label>
                    </div>
                    <div class="input-group mb-3">
                        <input id="cedula" name="cedula" type="text" value="<?php echo $info[3] ?>" class="form-control" placeholder="X-XXX-XXXX" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-left">
                        <label class="h6" for="edad">Edad</label>
                    </div>
                    <div class="input-group mb-3">
                        <input id="edad" name="edad" type="number" min="17" value="<?php echo $info[4] ?>" class="form-control" placeholder="0" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="correo">Correo</label>
                    </div>
                    <div class="input-group mb-3 ">
                        <input id="correo" name="correo" value="<?php echo $info[5] ?>" type="email" class="form-control" placeholder="example@utp.ac.pa" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="contrasena">Contraseña</label>
                    </div>
                    <div class="input-group">
                        <input id="contrasena" name="contrasena" value="<?php echo $info[6] ?>" type="password" class="form-control" placeholder="***********" required>
                        <div class="input-group-append">
                            <button class="btn-primary rounded showpass" id="pass" type="button"><i id="eyeopen" class="fas fa-eye prefix"></i><i id="eyeclose" class="fas fa-eye-slash prefix" hidden></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="contrasena2">Repetir Contraseña</label>
                    </div>
                    <input id="oldpw" name="oldpw" type="text" value="<?php echo $info[6] ?>" class="form-control" placeholder="id" hidden>
                    <input id="contrasena2" type="password" class="form-control" value="<?php echo $info[6] ?>" placeholder="***********" required>
                    <div class="invalid-feedback">
                        Contraseña incorrecta o esta vacio.
                    </div>
                </div>
            </div>

            <!-- Sign up button -->
            <button id="btnreg" class="btn my-4 btn-block" type="submit">Guardar Cambios</button>

            <!-- Terms of service -->
            <p>la contraseña que se muestra es diferente a la introducida <br>
                <em>Por primera vez</em> debido a que esta cifrada, <br> si no desea cambiarla dejela igual
            </p>
        </form>
        </div>

        

    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $("#contrasena").keyup(function() {
            pass1 = $("#contrasena").val();
            pass2 = $("#contrasena2").val();
            if (pass1 != pass2) {
                $("#btnreg").attr("disabled", "");
                $("#contrasena2").addClass("is-invalid");
            } else {
                $("#btnreg").removeAttr("disabled");
                $("#contrasena2").removeClass("is-invalid").addClass("is-valid");
            }
        });

        if (screen.width < 768) {
            $("#div-content").removeClass("regist").addClass("mt-5");
        } else {
            $("#div-content").addClass("regist").removeClass("mt-5");
        }

        $(window).resize(function() {
            if (screen.width < 768) {
                $("#div-content").removeClass("regist").addClass("mt-5");
            } else {
                $("#div-content").addClass("regist").removeClass("mt-5");
            }
        });

        $("#contrasena2").keyup(function() {
            pass1 = $("#contrasena").val();
            pass2 = $("#contrasena2").val();
            if (pass1 != pass2) {
                $("#btnreg").attr("disabled", "");
                $("#contrasena2").addClass("is-invalid");
            } else {
                $("#btnreg").removeAttr("disabled");
                $("#contrasena2").removeClass("is-invalid").addClass("is-valid");
            }
        });

        $("#pass").click(function() {
            var tipo = document.getElementById("contrasena");
            if (tipo.type == "password") {
                $("#contrasena").attr("type", "text");
                $("#eyeclose").removeAttr("hidden");
                $("#eyeopen").hide();
                $("#pass").removeClass("showpass").addClass("hidepass");
            } else {
                $("#contrasena").attr("type", "password");
                $("#eyeopen").show();
                $("#eyeclose").attr("hidden", "");
                $("#pass").removeClass("hidepass").addClass("showpass");
            }
        });
    });
</script>