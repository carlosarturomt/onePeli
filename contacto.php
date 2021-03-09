<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Carlos Arturo Miranda Trujano">
    <meta name="DC.creator" content="Miranda Trujano Carlos Arturo">
    <meta name="copyright" content="Carlos Arturo Miranda Trujano">
    <meta name="description" content="Contacta al compa que te tira esquina, envíale un mensaje y trabajen juntos cumpliendo proyectos.">
    <title>Contacto|Una Película</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" type="image/png" href="/assets/icons/video-camera.png">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="./css/desktop.css" media="(min-width: 1024px)"> -->
</head>

<body>
    <!------------------------------------------ BARRA DE NAVEGACIÓN ------------------------------------------------>
    <header class="nav_100-fixed">
        <div class="logo">
            <a href="index"><img class="logo" src="/assets/icons/video-camera.png" alt="CarlosArturoMT"></a>
        </div>
        <nav id="menu">
            <ul class="navTop">
                <li><a href="index">Inicio</a></li>
                <li><a href="contacto">Contacto</a></li>
            </ul>
        </nav>

        <div class="menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
    </header>
    <main>
    <section class="login">
            <section class="login__container">
                <h2>Contáctame</h2>
                <form class="login__container--form " action="#" method="POST">
                    <div class="login1">
                        <span class="user"></span>
                        <input class="input--register" type="text" name="nombre" placeholder="Nombre" autocomplete="on" required>
                    </div>
                    <div class="login1">
                        <span class="phone"></span>
                        <input class="input--register" type="tel" name="numero" placeholder="Teléfono" autocomplete="tel" required>
                    </div>
                    <div class="login1">
                        <span class="mail   "></span>
                        <input class="input--register" type="email" name="correo" placeholder="Correo" autocomplete="email" required>
                    </div>
                    <div class="login1">
                        <span class="font"></span>
                        <input class="input--register" type="text" name="mensaje" placeholder="Déjame tu mensaje" autocomplete="off" required>
                    </div>
                    <button type="submit" name="btn-submit" class="button">Enviar</button>
                </form>
            </section>
        </section>
    </main>

    <!----------------------------------- BOTÓN FLOTANTE Y PIE DE PÁGINA -------------------------------------------->
    <footer>
        <article class="container_info">
            <h4>
                <span>&copy;</span>
                <span>2021</span>
                <span>UnaPelícula</span>
            </h4>
        </article>
        <!-- <article class="container_social">
            <a href="https://www.facebook.com/psic.carlosarturomt1" target="_blank " rel="noreferrer"> <span class="facebook"></span>
            </a>
            <a href="https://www.instagram.com/arturo.kennedy1" target="_blank " rel="noreferrer"> <span class="instagram"></span>
            </a>
            <a href="https://github.com/carlosarturomt1" target="_blank " rel="noreferrer">
                <span class="github"></span>
            </a>
            <a href="https://www.linkedin.com/in/carlosarturomt1" target="_blank " rel="noreferrer"> <span class="linkedin"></span>
            </a>
        </article> -->
    </footer>
</body>
<script src="js/theme.js "></script>
<script src="js/toggle.js "></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js " crossorigin="anonymous " aria-label="Dark Theme "></script>

</html>

<?php
    if (isset($_POST['btn-submit'])) {

        $asunto = "Correo desde la web";
        $mensaje = test_input($_POST['mensaje']);
        $numero = test_input($_POST['numero']);
        $nombre = test_input($_POST['nombre']);
        $correo = test_input($_POST['correo']);


        $destino1 = "amiranda@dna3.com.mx";

        $header = "From: web carlosarturomt" . "\r\n";
        $header = "Reply-To: noreply" . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();

        $carta = "Mensaje: $mensaje \n";
        $carta .= "Tel. de contacto: $numero \n";
        $carta .= "Nombre del contacto: $nombre \n";
        $carta .= "Correo de contacto: $correo \n";

       
        // $mail1 = mail($destino1, $asunto, $carta, $header);
        $mail1 = mail($destino1, $asunto, $carta, $header);

        if ($mail1) {

            echo "<h2>Mensaje enviado, gracias por contactarnos.</h2>";
            echo "<meta http-equiv='refresh' content='3,url=index.html'>";
        } else {
            echo "No se ha podido enviar tu mensaje, intentalo mas tarde";
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>