<?php
    session_start();
    if (isset ($_SESSION['usuario'])!="invitado"){
        header("location:login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <a href="index.php"> Inicio</a> |
    <a href="portafolio.php"> Portafolio</a> |
    <a href="cerrar.php"> Cerrar</a> |
    <br/>
