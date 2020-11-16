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
</head>

<body>
    <div class="col-md-3 registro">
        <!-- Default form register -->
        <form class="text-center border border-light p-5 was-validated" action="#!">
            <div class="row"> <a class="btn blue-gradient"  href="../../index.php"><i id="eyeopen" class="fas fa-chevron-left prefix"></i>  VOLVER</a></div>
            <p class="h4 mb-4">Registro de usuario</p>
            <div class="row">
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="nombre">Nombre</label>
                    </div>
                    <div class="input-group">
                        <input id="nombre" type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                </div>
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="apellido">Apellido</label>
                    </div>
                    <div class="input-group mb-3">
                        <input id="apellido" type="text" class="form-control" placeholder="Apellido" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="cedula">Cedula</label>
                    </div>
                    <div class="input-group mb-3">
                        <input id="cedula" type="text" class="form-control" placeholder="X-XXX-XXXX" required>
                    </div>
                    <div class="text-left">
                        <label class="h6" for="correo">Correo</label>
                    </div>
                    <div class="input-group mb-3 ">
                        <input id="correo" type="email" class="form-control" placeholder="example@utp.ac.pa" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="contraseña">Contraseña</label>
                    </div>
                    <div class="input-group">
                        <input id="contraseña" type="password" class="form-control" placeholder="***********" aria-describedby="pass" required>
                        <div class="input-group-append">
                            <button class="btn-primary rounded" id="pass" type="button"><i id="eyeopen" class="fas fa-eye prefix"></i><i id="eyeclose" class="fas fa-eye-slash prefix" hidden></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-left">
                        <label class="h6" for="contraseña2">Repetir Contraseña</label>
                    </div>
                    <div class="input-group mb-3">
                        <input id="contraseña2" type="password" class="form-control" placeholder="***********" aria-describedby="pass2" required>
                    </div>
                </div>
            </div>

            <!-- Sign up button -->
            <button class="btn blue-gradient my-4 btn-block" type="submit">Sign in</button>


            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>

        </form>
    </div>
    <!-- Default form register -->
</body>

</html>
<script>
    $(document).ready(function() {});
    $("#pass").click(function() {
        var tipo = document.getElementById("contraseña");
        if (tipo.type == "password") {
            $("#contraseña").attr("type", "text");
            $("#eyeclose").removeAttr("hidden");
            $("#eyeopen").hide();
        } else {
            $("#contraseña").attr("type", "password");
            $("#eyeopen").show();
            $("#eyeclose").attr("hidden", "");
        }
    });
</script>