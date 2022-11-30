<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Ricardo Santiago Tomé">
        <link rel="stylesheet" href="webroot/css/estilos.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" sizes="96x96" href="../webroot/images/favicon-96x96.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Index Proyecto Tema5</title>
    </head>
    <body>
        <header>
            <h1>Desarrollo Aplicaciones Web Entorno Servidor</h1>
            <h2>Proyecto Tema 5</h2>
        </header>
        <main>
            <table id="tablaScript">
                <caption>Script`s <span>+</span> ficheros configuración <span>+</span> librerías</caption>
                <thead>
                    <tr>
                        <th colspan="4">Script's DB</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>scripts Entorno de desarrollo sauces.local</th>
                        <th>scripts Entorno de explotación 1&1</th>
                        <th>scripts Entorno de desarrollo casa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span>scripts.~ </span>Borrado usuario + DB</td>
                        <td><a href="mostrarcodigo/BorraDAW208DBDepartamentos.php">Mostrar</a></td>
                        <td><a href="mostrarcodigo/mostrarBorrarDB.php">Mostrar</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span>scripts.~ </span>Creación usuario + DB</td>
                        <td><a href="mostrarcodigo/CreaDAW208DBDepartamentos.php">Mostrar</a></td>
                        <td><a href="mostrarcodigo/mostrarCrearDB.php">Mostrar</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span>scripts.~ </span>Carga inicial de datos</td>
                        <td><a href="mostrarcodigo/CargaInicialDAW208DBDepartamentos.php">Mostrar</a></td>
                        <td><a href="mostrarcodigo/mostrarCargaInicialDB.php">Mostrar</a></td>
                        <td></td>
                    </tr>
                     <tr><th colspan="4"><h3>FICHERO CONFIGURACIÓN</h3></th></tr>
                    <tr>
                        <td><span>Configuración.~ </span>Conexión DB</td>
                        <td><a href="mostrarcodigo/mostrarConfDBSaucesLocal.php">Mostrar</a></td>
                        <td><a href="mostrarcodigo/mostrarConfDB1and1.php">Mostrar</a></td>
                        <td><a href="mostrarcodigo/mostrarConfDBUbuntuCasa.php">Mostrar</a></td>
                    </tr>
                    <tr><th colspan="4"><h3>LIBRERÍAS</h3></th></tr>
                    <tr>
                        <td><span>Libreria.~ </span>validación formularios</td>
                        <td colspan="3"><a href="mostrarcodigo/mostrarValidacionFormularios.php">Mostrar</a></td>
                    </tr>
                    <tr>
                        <td><span>Libreria.~ </span>formato castellano</td>
                        <td colspan="3"><a href="mostrarcodigo/mostrarFormatoCastellano.php">Mostrar</a></td>
                    </tr>
                    <tr>
                        <td><span>Libreria.~ </span>calculadora</td>
                        <td colspan="3"><a href="mostrarcodigo/mostrarLibreriaCalculadora.php">Mostrar</a></td>
                    </tr>
                </tbody>
            </table>
            <table id="tablaEjercicios">
                <caption>Ejercicios prácticos PHP</caption>
                <thead>
                    <tr>
                        <th>Enunciado</th>
                        <th>Ejecutar</th>
                        <th>Mostrar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span>00.~ </span>Mostrar el contenido de las variables superglobales y phpinfo().</td>
                        <td><a href="codigoPHP/ejercicio00.php">Ejecutar</a></td>
                        <td><a href="mostrarcodigo/mostrarEjercicio00.php">Mostrar</a></td>
                    </tr>
                    <tr>
                        <td><span>01.~</span>Desarrollo de un control de acceso con identificación del usuario basado en la función header().</td>
                        <td><a href="codigoPHP/ejercicio01.php">Ejecutar</a></td>
                        <td><a href="mostrarcodigo/mostrarEjercicio01.php">Mostrar</a></td>
                    </tr>
                    <tr>
                        <td><span>02.~</span>Desarrollo de un control de acceso con identificación del usuario basado en la función header()
                            y en el uso de una tabla “Usuario” de la base de datos.</td>
                        <td><a href="codigoPHP/ejercicio02.php">Ejecutar</a></td>
                        <td><a href="mostrarcodigo/mostrarEjercicio02.php">Mostrar</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
        <footer>
            <p>2022-23  IES LOS SAUCES.<a href="../index.html" id="enlacePrincipal" title="Enlace a Index Principal">Ricardo Santiago Tomé </a>© Todos los derechos reservados</p>
            <a href="https://github.com/RicardoSantom" target="blank"  class="enlaces" id="github" title="RicardoSantom en GitHub">
            </a>
            <a href="https://www.linkedin.com/in/ricardo-santiago-tom%C3%A9/" id="linkedin" title="Ricardo Santiago Tomé en Linkedim" target="_blank"></a>
            <a href="../doc/curriculumRicardo.pdf" class="material-icons" title="Curriculum Vitae Ricardo Santiago Tomé" target="_blank" id="curriculum"><span class="material-icons md-18">face</span></a>
            <a href="../208DWESproyectoDWES/index.php" id="enlaceSecundario" title="Enlace a Index DWES">Index DWES</a>
        </footer>
    </body>
</html>

