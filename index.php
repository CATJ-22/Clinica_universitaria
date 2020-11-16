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

<body>
    <div class="col-md-8 login" >
        <form class="text-center border border-light p-5" action="#!" >

            <p class="h4 mb-4">Inicio de sesion</p>

            <!-- Email -->
            <div class="input-group mb-3" style="width: 300px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-envelope prefix"></i></span>
                </div>
                <input type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="E-mail" >
            </div>

            <!-- Password -->
            <div class="input-group mb-3">
                <input id="contraseña" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="button" class="btn-primary input-group-text showpass" id="basic-addon2"><i id="eyeopen" class="fas fa-eye prefix"></i><i id="eyeclose" class="fas fa-eye-slash prefix" hidden></i></button>
                </div>
            </div>
            <div class="d-flex justify-content-around">
                <div>
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remeber">
                        <label class="custom-control-label" for="defaultLoginFormRemember">Recordarme</label>
                    </div>
                </div>
            </div>


            <!-- Sign in button -->
            <button class="btn blue-gradient btn-block my-4" type="submit">Sign in</button>

            <!-- Register -->
            <p>No tienes cuenta?
                <a href="Pages/auth/registro.php">Registrarse</a> <br>
                <a href="">Forgot password?</a>
            </p>


        </form>
        <!-- Default form login -->
    </div>
</body>

</html>
<script>
    $(document).ready(function() {});

    $("#basic-addon2").click(function() {
        var tipo = document.getElementById("contraseña");
        if (tipo.type == "password") {
            $("#contraseña").attr("type", "text");
            $("#eyeclose").removeAttr("hidden");
            $("#eyeopen").hide();
            $( "#basic-addon2" ).removeClass( "showpass" ).addClass( "hidepass" );
        } else {
            $("#contraseña").attr("type", "password");
            $("#eyeopen").show();
            $("#eyeclose").attr("hidden", "");
            $( "#basic-addon2" ).removeClass( "hidepass" ).addClass( "showpass" );
        }
    });
</script>