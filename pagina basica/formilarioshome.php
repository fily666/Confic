<?php
$conexion = mysqli_connect("localhost", "root", "", "confic");
/* verificar la conexión */
if ($conexion->connect_errno) {
    printf("Conexión fallida: %s\n", $conexion->connect_error);
    exit();
}
$consulta = 'SELECT * FROM `g1`';

$resultado = $conexion->query($consulta);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <link rel="stylesheet" href="./css/main2.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>index</title>
</head>

<body>

    <div class="general">

        <header>
            <img class="yot" src="./img/descarga.jpg">
            <h1>Plataforma de control y seguimiento DVND CONFIC </h1>
        </header>
        <nav>

        </nav>
        <section id="trom">
            <br>
            <center>
                <h1>Menu </h1>
            </center>
            <br>
            <ul id="menuList">
                <li><a href='home.html' rel='nofollow'>Home</a></li>
                <li><a href='formilarioshome.php' rel='nofollow'>Inventario</a></li>
                <li><a href='user.php' rel='nofollow'>Usuario</a></li>
            </ul>
        </section>
        <aside>
            <div class="tuud">
                <h2>Inventario </h2>
            </div>

            <div class="tood">
                <div>
                    <a href='formularios.html'><button class="button">Nuevo Registro</button></a>
                </div>
                <br><br><br><br>



                <div id="datatable1_length" class="mmm2">
                    <label>Mostrando <select size="1" name="datatable1_length" aria-controls="datatable1">
                            <option value="10" selected="selected">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> Registros</label>
                </div>

                <div class="mmm1" id="datatable1_filter">
                    <label>Buscar <input type="text" aria-controls="datatable1"></label>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Tipó de identificacion</th>
                            <th>N° identificacion</th>
                            <th>Email</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($resultado)) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $row['id'] ?>
                                </td>
                                <td>
                                    <?php echo $row['name'] ?>
                                </td>
                                <td>
                                    <?php echo $row['identificacion'] ?>
                                </td>
                                <td>
                                    <?php echo $row['number'] ?>
                                </td>
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['fecha'] ?>
                                </td>

                                <td>
                                    <center>
                                        <a href="______-" class="btn" title="Editar">Editar</a>
                                        <a href="____" class="btn" title="Elimnar">Borrar</a>

                                    </center>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
                <br>
                <div class="container">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Generar Reporte</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <h2>Generar Reporte</h2>

                                <div class="modal-body">
                                    <form method="post" class="form" action="reporte.php">
                                        <input type="date" name="fecha1" />
                                        <input type="date" name="fecha2" />
                                        <button name="descargar">Descargar</button>

                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>





        </aside>


        <footer>

            <p> Ejercito Nacional de Colombia</p>
            <p> Carrera 54 N 26 25 CAN Bogot&aacute, D.C. </p>
            <p> PBX (57-1) 018000 111 689</p>
            <p> Horario: 8:00 a 16:00 horas de lunes a viernes.</p>
            <p> Atenci&oacuten ciudadana: tel&eacute;fono (57-1) 2216336 - 2220950 - 4261499 </p>
            <p> (57-1) 4261499 </p>
            <p></p>










        </footer>




    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



</body>


</html>