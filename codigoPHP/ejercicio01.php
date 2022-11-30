 <?php
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='paso') {
    header('WWW-Authenticate: Basic realm="Control de acceso a ejercicio01.php"');
    header('HTTP/1.0 401 Acceso no autorizado');
    echo '<body style="background-image:url(../webroot/images/cancelar.png); background-repeat:no-repeat;background-position: center;"></body>';
    echo '<h1 style="text-align:center;color:orange;font-family:sans-serif;margin-top:2rem">Ha cancelado su autenticación</h1>';
    exit;
} else {
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Ricardo Santiago Tomé">
        <link rel="stylesheet" href="../webroot/css/estilosPlantilla.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" sizes="96x96" href="../../webroot/images/favicon-96x96.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Ejercicio 01 Tema5</title>
    </head>
    <body>
        <header>
            <h1>Ejercicios Proyecto Tema 5</h1>
            <h2>Ejercicio 01.php</h2>
        </header>
        <main>
            <article>
                <h3>Enunciado: Desarrollo de un control de acceso con identificación del usuario basado en la función header().</h3>
            </article>
        </main>
        <footer>
            <p>2022-23  IES LOS SAUCES. <a href="../../../index.html" id="enlacePrincipal" title="Enlace a Index Principal">Ricardo Santiago Tomé</a> © Todos los derechos reservados</p>
            <a href="https://github.com/RicardoSantom" target="blank" id="github" title="RicardoSantom en GitHub">
            </a>
            <a href="https://www.linkedin.com/in/ricardo-santiago-tom%C3%A9/" id="linkedin" title="Ricardo Santiago Tomé en Linkedim" target="_blank"></a>
            <a href="../../doc/curriculumRicardo.pdf" class="material-icons" title="Curriculum Vitae Ricardo Santiago Tomé" target="_blank" id="curriculum"><span class="material-icons md-18">face</span></a>
            <a href="../indexProyectoTema5.php" id="enlaceSecundario" title="Enlace a Index Proyecto Tema5">Index Proyecto Tema5</a>
        </footer>
    </body>
</html>
<?php 
echo "<h4>Hola usuario {$_SERVER['PHP_AUTH_USER']}.</h4>";
printf("<h5>Introdujo correctamente su contraseña= %s.</h5>",$_SERVER['PHP_AUTH_PW']);
//printf("Método de autencicación: %s", $_SERVER['PHP_AUTH_TYPE']);
}?>