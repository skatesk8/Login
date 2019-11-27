<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>DAI-BIT - Resgistro</title>
    <link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>

    <div class="container-all" style="margin-top: 50px;">
        <div class="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description">NUEVA  &nbsp;<span>COLECCION</span></h1>
            <p class="text-description"></p>
        </div>

        <div class="ctn-form">
            <img src="images/logo-magtimus-small.png" alt="" class="logo">
            <h1 class="title">Registrarse</h1>

            <form action="" method="post">             
                <label for="">Nombre de Usuario</label>
                <input type="text" name="username">
                <span class="msg-error"></span>
                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"></span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"></span>
                <input type="submit" value="Registrarse">

            </form>

            <span class="text-footer">¿Ya te has registrado?
                <a href="Index.php">Iniciar Sesión</a>
            </span>
        </div>

    </div>

</body>

</html>