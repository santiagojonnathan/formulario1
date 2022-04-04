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

            <h1 >JIMA</h1>
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
            <h3>RELLENE LOS CAMPOS A CONTINUACION</h3>
            <br>
            <h3>DATOS DEL CLIENTE</h3>
            <br>
            <div class="contenedor">


                <div class="contenido">

                    <form class="" action="respuesta1.php" method="post">

                        <div class="informacion">

                            <div class="campo">
                                <label for="nombre">Nombre(s)
                                    <input type="text" name="nombre" id="nombre">
                                </label>
                            </div>
                            <div class="campo">
                                <label for="apellido">Apellido Paterno
                                    <input type="text" name="apellidoP" id="apellidoP">
                                </label>
                            </div>
                            <div class="campo">
                                <label for="apellido">Apellido Materno
                                    <input type="text" name="apellidoM" id="apellidoM">
                                </label>
                            </div>
                            <div class="campo">
                                <label for="apellido">Correo electronico
                                    <input type="text" name="email" id="email">
                                </label>
                            </div>
                            <div class="campo">
                                <label for="apellido">Numero de Telefono
                                    <input type="text" name="tel1" id="tel1" maxlength="10" minlength="10">
                                </label>
                            </div>
                            <!-- Desde un checkbox-->
                            <div class="campo">
                                <label for="notificaciones">Notificaciones
                                    <input type="checkbox" name="notificaciones" id="notificaciones">
                                </label>
                            </div>
                        </div>
                        <!--.informacion-->

                        <div class="especializacion">
                            <h3>Tipo de Proyecto</h3>

                            <select name="tproject" value="-Any-">
                                <option>- Selecciona una area -</option>
                                <option value="dep">DEPARTAMENTO</option>
                                <option value="resi">RESIDENCIA</option>
                                <option value="otro">OTRO</option>
                            </select>
                        </div>

                        <div class="textarea">
                            <div class="campo">
                                <h3>Comentario/Mensaje</h3>
                                <label for="mensaje"> Comentario/Mensaje <br />
                                    <textarea name="mensaje" rows="8" cols="40" id="mensaje"></textarea>
                                </label>
                                <input type="submit">
                            </div>
                        </div>
                    </form>


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