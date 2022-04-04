<!DOCTYPE html>
<html lang="es">

<head>
    <title>Jonnathan Santiago</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum scale = 1, minimun-scale=1">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
        <div class="contenedor">

            <h1>JIMA</h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="#">Contactanos</a>
                <a href="#">Inicio</a>
                <a href="#">Galeria</a>
                <a href="#">Acerca de</a>
            </nav>
        </div>
    </header>


    <main>
        <section id="banner">
            <img src="img/banner.jpg" alt="banner pagina">
            <div class="contenedor">
                <h2>Vivienda JIMA</h2>
                <p>
                    Es una empresa orizabeña especializada en el desarrollo de conjuntos habitacionales. Contamos con
                    mas de 30 años de experiencia y más de 2,000 viviendas construidas mediante un proceso constante de
                    integración y calidad total. Esto nos permite ofrecer a nuestros clientes viviendas funcionales,
                    dignas, privadas y económicas.
                </p>
                <a href="#">Recargar</a>
            </div>

        </section>

        <section id="bienvenidos">
            <h2>
                BIENVENIDOS JIMA
            </h2>
            <p>EN ESTE APARTADO PODRA ENVIAR UN FORMULARIO PARA TENER UNA CONEXION MAS DIRECTA CON LA EMPRESA.
            </p>
        </section>

        <section id="blog">

            <div class="contenedor">


                <div class="contenidoServidor">
                    <h1>DATOS DE CONTACTO</h1>
                    <br>
                    <br>


                    <hr>
                    <?php $resultado = $_POST; ?>
                    <?php $nombre = $resultado['nombre'];    ?>
                    <?php $apellidoP = $resultado['apellidoP']; ?>
                    <?php $apellidoM = $resultado['apellidoM']; ?>
                    <?php $email = $resultado['email']; ?>
                    <?php $tel1 = $resultado['tel1']; ?>


                    <?php
                    // validar inputs
                    if (!(filter_has_var(INPUT_POST, 'nombre') &&
                        (strlen(filter_input(INPUT_POST, 'nombre')) > 0))) {
                        echo "El nombre es obligatorio";
                    } else {    ?>
                        <p>Nombre: <?php echo $nombre; ?><br></p>
                    <?php } ?>


                    <?php if (!isset($apellidoP) || trim($apellidoP) != '') { ?>
                        <p>Apellido Paterno: <?php echo $apellidoP; ?></p>
                    <?php } else {
                        echo "El apellido Paterno es obligatorio";
                    }  ?>


                    <?php
                    // validar inputs
                    if (!(filter_has_var(INPUT_POST, 'apellidoM') &&
                        (strlen(filter_input(INPUT_POST, 'apellidoM')) > 0))) {
                        echo "El apellido Materno es obligatorio";
                    } else {    ?>
                        <p>Apellido Materno: <?php echo $apellidoM; ?><br></p>
                    <?php } ?>


                    <?php
                    // validar inputs
                    if (!(filter_has_var(INPUT_POST, 'email') &&
                        (strlen(filter_input(INPUT_POST, 'email')) > 0))) {
                        echo "El Email es obligatorio";
                    } else {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "<p>Email: $email <br></p>";
                        }else{
                            echo "Esta dirección de correo ($email) no es válida.";
                        }
                    ?>
                        
                        
                    <?php } ?>

                    <?php
                    // validar inputs
                    if (!(filter_has_var(INPUT_POST, 'tel1') &&
                        (strlen(filter_input(INPUT_POST, 'tel1')) > 0))) {
                        echo "El Telefono es obligatorio";
                    } else {    ?>
                        <p>Telefono: <?php echo $tel1; ?><br></p>
                    <?php } ?>

                    <hr>
                    <?php
                    if (isset($_POST['notificaciones'])) {
                        $notificaciones = $_POST['notificaciones'];
                        if ($notificaciones == 'on') {
                            echo "Se ha inscrito correctamente a las notificaciones";
                        }
                    }
                    ?>

                    <hr>



                    <?php //validar Select 
                    ?>
                    <?php if (isset($_POST['tproject'])) {
                        $project = $_POST['tproject'];
                        echo "<h2>Tipo de proyecto</h2>";
                        switch ($project) {
                            case 'dep':
                                echo "Departamento";
                                break;
                            case 'resi':
                                echo "Residencia";
                                break;
                            case 'otro':
                                echo "Otro";
                                break;
                            default:
                                echo "No se eligio una opcion";
                                break;
                        }
                    } ?>


                    <hr>


                    <?php // validando textarea 
                    ?>
                    <h2>Mensaje</h2>
                    <?php if (isset($_POST['mensaje'])) {
                        $mensaje = $_POST['mensaje'];
                        $nuevo_mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
                        if (strlen($nuevo_mensaje) > 0 &&  trim($nuevo_mensaje)) {
                            echo  $nuevo_mensaje;
                        } else {
                            echo "el mensaje esta vacio";
                        }
                    } ?>



                </div>

            </div>
        </section>

        <section id="info">
            <h3>¡Agradecemos su visita a el sitio!<br>
                NUESTROS ULTIMOS PROYECTOS</h3>
            <div class="contenedor">

                <div class="info-pet">
                    <img src="img/foot1.jpg" alt="practica3">
                    <h4>CASA 1</h4>
                </div>
                <div class="info-pet">
                    <img src="img/foot2.jpg" alt="practica3">
                    <h4>CASA 2</h4>
                </div>
                <div class="info-pet">
                    <img src="img/foot3.jpg" alt="practica3">
                    <h4>CASA 3</h4>
                </div>
                <div class="info-pet">
                    <img src="img/foot4.jpg" alt="practica3">
                    <h4>CASA 4</h4>
                </div>

            </div>
        </section>


    </main>

    <footer>

        <div class="contenedor">
            <p class="copy">VIVIENDAS JIMA&copy; 2022</p>
            <div class="sociales">
                <a class="icon-facebook-squared" href="#"></a>
                <a class="icon-instagram" href="#"></a>
            </div>

        </div>

    </footer>

</body>

</html>