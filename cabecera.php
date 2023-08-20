<?php

session_start();
if (isset($_SESSION['usuario']) != "admin") {
    header("location:login.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Portafolio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <header>
            <nav class="nav justify-content-center navbar navbar-expand-lg navbar-light bg-light">
                <a class="nav-link" href="index.php" >Inicio</a>
                <a class="nav-link" href="portafolio.php">Portafolio</a>
                <a class="nav-link" href="cerrar.php">Cerrar Sesión</a>
            </nav>
            <br />
        </header>