
        <?php
        $a =$_POST['a'];
        $b =$_POST['b'];
        $c =$_POST['c'];

        $conexion = mysqli_connect("localhost","root","","confic");
        $consulta = "INSERT INTO user(a,b,c) VALUE('$a','$b','$c')";
        $resultado = mysqli_query($conexion, $consulta);
       
        if(! $resultado){
                echo'error al registrar'; 
              } 
        echo "¡gracias! hemos recivido sus datos";

        mysqli_close($conexion);

        ?>
