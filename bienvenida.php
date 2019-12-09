<?php 

    session_start();

    if (! isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: Index.php");
        exit;
    }

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
</head>

<body>

    <header class="container">
        <div class="row">
            <div class="col-sm-12 my-4">
                <h1 class="text-center display-3 text-uppercase font-weight-bold mt-4">Bienvenido</h1>
            </div>
            <div class="col-sm-6">
                <img src="img/right-laptop.png" class="img-fluid">
            </div>
            <div class="col-sm-6 text-center">
                <p class="text-center text-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam
                    exercitationem reprehenderit dolor corrupti est?</p>
                <form action="index.html">
                    <input class="form-control rounded-0 my-4 text-center" type="email" name="Write your Email"
                        placeholder="Enter your email">
                    <a href="cerrar-sesion.php" class="btn btn-success">
                        Cerrar Sesión
                    </a>
                </form>
                <ul class="list-unstyled list-inline mt-4">
                    <li class="list-inline-item">
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

</body>

</html>