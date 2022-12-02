<?php
//Comprobación de si el usuario ha tecleado
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Mi dominio"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Se ha cancelado el inicio de sesión';
    die;
} else {
    try {
        require_once '../conf/confDB.php';
        $consultaPorCodigo = <<< sq2
            select * from T01_Usuario where T01_CodUsuario='$_SERVER[PHP_AUTH_USER]';
        sq2;
        $actualizacionNumConexiones = <<< sq3
            update T01_Usuario set T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now() where T01_CodUsuario='$_SERVER[PHP_AUTH_USER]';
        sq3;
        $miDB = new PDO(DSN, NOMBREUSUARIO, PASSWORD);
        $queryConsultaPorCodigo = $miDB->query($consultaPorCodigo);
        $oConsultaPorCodigo = $queryConsultaPorCodigo->fetchObject();
        if (!$oConsultaPorCodigo || $oConsultaPorCodigo->T01_Password != hash('sha256', ($_SERVER['PHP_AUTH_USER'] . $_SERVER['PHP_AUTH_PW']))) {
            header('WWW-Authenticate: Basic realm="Mi dominio"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Se ha cancelado el inicio de sesión';
            exit;
        } /*else {
            $queryActualizacionNumConexiones = $miDB->query($actualizacionNumConexiones);
            echo "Bienvenido $_SERVER[PHP_AUTH_USER] <br/>";
            echo "Has entrado a la aplicacion $oConsultaPorCodigo->T01_NumConexiones veces <br/>";
            echo "Te has conectado por última vez $oConsultaPorCodigo->T01_FechaHoraUltimaConexion";
        }*/
    } catch (PDOException $excepcion) {
        echo 'Error: ' . $excepcion->getMessage() . "<br>";
        echo 'Código de error: ' . $excepcion->getCode() . "<br>";
    } finally {
        unset($miDB);
    }
}
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
        <title>Ejercicio 02 Tema5</title>
    </head>
    <body>
        <header>
            <h1>Ejercicios Proyecto Tema 5</h1>
            <h2>Ejercicio 02.php</h2>
        </header>
        <main>
            <article>
                <h3>Enunciado: Desarrollo de un control de acceso con identificación del usuario basado en la función header().</h3>
                <?php
                echo "<div>Nombre de usuario: " . $_SERVER['PHP_AUTH_USER'] . "</div>";
                echo "<div>Contraseña: " . $_SERVER['PHP_AUTH_PW'] . "</div>";
                ?>
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