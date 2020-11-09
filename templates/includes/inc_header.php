<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA UNJBG</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/882059baa9.js" crossorigin="anonymous"></script>

    <style>

        .btn-floating i {
            display: inline-block;
            width: inherit;
            color: #fff;
            text-align: center;
        }
        .btn-floating i {
            font-size: 1.25rem;
            line-height: 47px;
        }
        .fab {
            font-family: "Font Awesome 5 Brands";
        }
        .btn-floating {
            position: relative;
            z-index: 1;
            display: inline-block;
            padding: 0;
            margin: 10px;
            overflow: hidden;
            vertical-align: middle;
            cursor: pointer;
            border-radius: 50%;
            -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
            box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            width: 47px;
            height: 47px;
        }

    </style>

    <style>
        .masthead {
            height: 100vh;
            min-height: 500px;
            background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
<!-- ends inc_header.php -->

    <header class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
            <img src="<?php echo IMAGES.'logo.png' ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            <a class="navbar-brand ml-3" href="#">Universidad Nacional Jorge Basadre Grohmann</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="<?php echo URL ?>">Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo URL.'home/usuarios' ?>">Usuarios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo UPLOADS.'articulo.pdf' ?>" target="_black">Articulo</a>
                </li>
            </ul>
            </div>
        </div>
    </header>
