<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Mis estilos -->
    <link rel="stylesheet" href="CSS/estilos.css">

    <title>Datos de Compra</title>
    
</head>
<body>
    <header>
        <div class="header contenedor">
            <!--Barra de navegacion-->
            <section>
                <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">
                        <img src="./imagenes_integrador_front/codoacodo.png" alt="" width="150px">Conf BsAs
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="conferencia"><a class="nav-link" aria-current="page"
                                    href="index.html">La conferencia</a></li>
                            <li class="oradores"><a class="nav-link" href="#seccion-oradores">Los oradores</a></li>
                            <li class="lugaryfecha"><a class="nav-link" href="#seccion-octubre">El lugar y la fecha</a></li>
                            <li class="orador"><a class="nav-link" href="#convierteteenorador"
                                    tabindex="-1">Conviértete en orador</a></li>
                            <li class="comprartickets"><a class="nav-link active" style="color: #2FA345"
                                href="tickets.html">Comprar tickets</a></li>
                        </ul>
                    </div>
                </nav>
            </section>
        </div>
    </header>

    <!--Formulario Compra--->
    <main>
        <div class="container col-lg-4 text-center my-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Ticket</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                $servidor = "localhost";
                $usuario = "root";
                $clave = "";
                $conexion = mysqli_connect($servidor, $usuario, $clave);

                $baseDatos = "tickets";
                mysqli_select_db($conexion, $baseDatos);


                $sql = "SELECT * FROM compra_tickets";
                $consulta = mysqli_query($conexion, $sql);
                
                if (mysqli_num_rows($consulta) > 0) {
                  while($fila = mysqli_fetch_assoc($consulta)) {
                    echo "<tr>
                            <td>" . $fila["Id"] . "</td>
                            <td>" . $fila["Nombre"]. "</td>
                            <td>" . $fila["Apellido"]. "</td>
                            <td>" . $fila["Correo"]. "</td>
                            <td>" . $fila["Cantidad"]. "</td>
                            <td>" . $fila["Categoria"]. "</td>
                        </tr>";
                  }
                } 
                ?>

                </tbody>
            </table>
        </div>
    </main>

    <!--Pie de pagina-->
    <section>
        <footer>
            <ul class="footer position-absolute bottom-0 w-100 sticky-bottom bg-dark text-white py-4">
                <li class="preguntas"><a>Preguntas frecuentes</a></li>
                <li class="contacto"><a>Contáctanos</a></li>
                <li class="prensa"><a>Prensa</a></li>
                <li class="conferencias"><a>Conferencias</a></li>
                <li class="condiciones"><a>Términos y condiciones</a></li>
                <li class="privacidad"><a>Privacidad</a></li>
                <li class="estudiantes"><a>Tickets</a></li>
            </ul>
        </footer>
    </section>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script src="JS/bootstrap.min.js"></script>
    <!--Mis Scripts-->
    <script src="JS/scripts.js"></script>

</body>
</html>