<?php
session_start();
if(!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f97fcd2c02.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Home - Inventory</title>
    <style>
        body {
            font-family: 'Crimson Pro', serif;
            font-size: 20px;
            zoom: 75%;
            background-color: #D6DBDF;
        }

        a:hover {
            text-decoration: none;
            opacity: 0.8;
            align-content: center;
        }

        .fijo {
            position: fixed;
            z-index: 9999;
            min-width: 100%;
        }

        .fijo ul li a {
            display: block;
            pointer-events: auto;
        }

        .d-flex {
            pointer-events: auto;
        }

        .navbar-brand {
            pointer-events: auto;
        }

        .nav-link {
            pointer-events: auto;
        }

        .container {
            text-align: center;
            /* Centra el contenido dentro del contenedor */
        }

        /* Estilos para el contenido */
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="fijo">
        <nav class="navbar navbar-expand-lg navbar-dark bg-" style="background-color: #D6DBDF;">
            <li class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Ferreteria Jotta-R">
            </li>
            <div class="container">
                <a class="navbar-brand" href="" style="color:black" >INICIO</a>
           <!--     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="nosotros.php">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" class="btn dropdown-toggle " type="button" style="color: #fff;"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SERVICIOS <i class="fa-sharp fa-solid fa-chevron-up fa-rotate-180 fa-xs"
                                        style="color: #f7f7f7;"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-danger">
                                    <li><a class="dropdown-item" href="cotizacion.php"><i class="fa-solid fa-tag"
                                                style="color: #e40c0c;"></i> &nbsp; COTIZACION</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contacto.php"> CONTACTO</a>
                        </li>
                        <div class="dropdown">
                            <a class="nav-link" class="btn dropdown-toggle" type="button" style="color: #fff;"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                PRODUCTOS <i class="fa-sharp fa-solid fa-chevron-up fa-rotate-180 fa-xs"
                                    style="color: #f7f7f7;"></i>
                                </button>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-danger">
                                <li> <a class="dropdown-item" href="productos.php"> <i class="fa-solid fa-list"
                                            style="color: #e40c0c;"></i>
                                        &nbsp; TODOS
                                    </a></li>
                                <li><a class="dropdown-item" href="hogar.php"><i class="fa-solid fa-house"
                                            style="color: #e40c0c;"></i> &nbsp; HOGAR</a></li>
                                <li><a class="dropdown-item" href="plomeria.php"> <i class="fa-solid fa-toilet"
                                            style="color: #e40c0c;"></i> &nbsp; PLOMERIA</a></li>
                                <li><a class="dropdown-item" href="pinturas.php"> <i class="fa-solid fa-palette"
                                            style="color: #e40c0c;"></i> &nbsp; PINTURAS</a></li>
                                <li><a class="dropdown-item" href="electricos.php"> <i class="fa-solid fa-bolt"
                                            style="color: #e40c0c;"></i> &nbsp; ELÉCTRICOS</a></li>
                                <li><a class="dropdown-item" href="construccion.php"> <i
                                            class="fa-solid fa-person-digging" style="color: #e40c0c;"></i>
                                        &nbsp;CONSTRUCCIÓN</a></li>
                                <li><a class="dropdown-item" href="bombillos.php"><i class="fa-solid fa-lightbulb"
                                            style="color: #e40c0c;"></i> &nbsp; BOMBILLOS</a></li>
                            </ul>
                        </div>
                    </ul>
                    </ul> -->
                    <li class="navbar-nav">
                        <a href="logout.php" title="Salir"><i class="fa-solid fa-arrow-right-from-bracket"
                                style="color: #e40c0c;"></i></a>
                    </li>
                </div>
            </div>
        </nav>
    </div>
    <br><br><br><br>
    <div class="container">
        <div class="content">
            <table class="table">
                <thead>
                    <!-- <a href="home.php"> <i class="fa-solid fa-rotate-right"></i></a> --->
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>

</html>