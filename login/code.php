<?php
        

        
        $a =$_POST['a'];
        $username =$_POST['username'];
        $password =$_POST['password'];


        $conexion = mysqli_connect("localhost","root","","confic");
        $consulta = "INSERT INTO user(a,username,password) VALUE('$a','$username','$password')";
        $resultado = mysqli_query($conexion, $consulta);
       
        if(! $resultado){
                echo'error al registrar'; 
              } 
        echo "¡gracias! hemos recivido sus datos";

        mysqli_close($conexion);

        ?>
