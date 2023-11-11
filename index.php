<?php require 'controlador.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <title>Registro</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.html"><p>Inicio</p></a>
            <a href="servicios.html"><p>Servicios</p></a>
            <a href="index.html"><img class="logo" src="img/logo.png" alt=""></a>
            <a href="acerca.html"><p>Acerca de</p></a>
            <a href="#"><p>Registrarse</p></a>
        </nav>
    </header>


    <form action="" method="post" autocomplete="off" id="Registro">
        <h1>Registro de Usuarios</h1>

        <label for="">Usuario</label>
        <input type="text" name="usuario_usu" id="">
        
        <label for="">Password</label>
        <input type="password" name="password_usu" id="">

        <button type="submit" name="registro">Registro</button>
    </form>

    <footer>
        <div class="redes-sociales">
            <a href="#"><img src="img/fac.png"></a>
            <a href="#"><img src="img/twi.png"></a>
            <a href="#"><img src="img/ins.png"></a>
            <a href="#"><img src="img/lin.png"></a>
            <a href="#" id="you"><img src="img/you.jpg"></a>
        </div>
        <p id="empresa">&copy; 2023 InkSoul Studios</p>
        <p id="contacto">Contacto: &#40;656&#41; 123-4567<br>inksoul@gmail.com</p>
    </footer>        
</body>
</html>