<?php 
session_start();

    if ($_POST) {
        if (($_POST['usuario']=="admin") && ($_POST['contrasenia']=="123")) {
            $_SESSION['usuario']="admin";
            header("location:index.php");

        }
        else {
            echo "<script> alert('Usuario o Contraseña incorrecto');   </script>";
        }
    }

?>


<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-4">

            </div>

            <div class="col-md-4">
            <br/>
                <div class="card">
                    <div class="card-header">
                        Iniciar Sesión
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">

                            Usuario: <input class="form-control" type="text" name="usuario" id="">
                            <br />
                            Contraseña: <input class="form-control" type="password" name="contrasenia" id="">
                            <br />

                            <button class="btn btn-success" type="submit">Acceder</button>


                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        
                    </div>
                </div>

            </div>

            <div class="col-md-4">

            </div>
        </div>


    </div>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>