<?php
$conexion = mysqli_connect("localhost", "root", "", "confic");
/* verificar la conexión */
if ($conexion->connect_errno) {
         printf("Conexión fallida: %s\n", $conexion->connect_error);
          exit();
      }
      $consulta = 'SELECT * FROM `user`';

      $resultado = $conexion->query($consulta);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <link rel="stylesheet" href="./css/main2.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>usuarios</title>
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
                <li><a href='formilarioshome.html' rel='nofollow'>Inventario</a></li>
                <li><a href='user.html' rel='nofollow'>Usuario</a></li>
            </ul>
        </section>
        <aside>
            <div class="tuud">

                <h1>usuarios </h1>

            </div>

            <div class="tood">
                    <a href='usuarioeditar.html'><button class="button" >Nuevo Registro</button></a> 

                <table>
                <thead>
                    <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>usuario</th>
                <th>accion</th>
            </tr>
                
                </thead>
                <tbody>
                 <?php
                while ($row = mysqli_fetch_assoc($resultado) )
                {
                ?>
        <tr>
                 <td><?php echo $row['id'] ?></td>
                 <td><?php echo $row['name'] ?></td>
                 <td><?php echo $row['username'] ?></td>
                 <td><center>
                      <a href="______-" class="btn" title="Editar">Editar</a>
                         <a href="____" class="btn" title="Elimnar">Borrar</a>  
             
                 </center> </td>
        </tr>
        <?php
       }
?>
        
 
                </tbody>
            
        </table>

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




</body>
