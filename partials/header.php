<!doctype html>
<?php
    session_start(); 
    
    if(isset($_COOKIE["usuarioid"])){
        $usuarioid = $_COOKIE["usuarioid"];
    }elseif(isset($_GET["id"])){
        $usuarioid = $_GET["id"];
    }else{
         $usuarioid = null;
    }

?> 
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
</head>
    <body>
        <div id="fondo">
            <img class="img-responsive fondo1 imgFondo">
            <img class="img-responsive fondo2 imgFondo">
            <img class="img-responsive fondo3 imgFondo">
            <img class="img-responsive fondo4 imgFondo">
            <img class="img-responsive fondo5 imgFondo">
            <img class="img-responsive fondo6 imgFondo">
        </div>
        <nav class="navbar navbar-default margen">
            <ul class="nav navbar-nav">
                <li class="active">
                    <img src="assets/img/persona.png" class="img-responsive iconPersona" alt="Responsive image">                          
                </li>
            </ul>
            <span id="titulo" class="pull-right titulo" >Ingresar</span>
            <a id="btnCerrarSesion" class="btn btn-primary pull-right btn-cerrar hide" type="button" href="actions/logout.php">
                <span class="glyphicon glyphicon-off"></span>
                <span class="">Cerrar Sesión</span>      
            </a>           
        </nav>
         