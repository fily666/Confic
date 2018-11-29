<?php

        $name =$_POST['name'];
        $identificacion =$_POST['identificacion'];
        $number =$_POST['number'];
        $email =$_POST['email'];
        $novedades =$_POST['novedades'];

        

        $conexion = mysqli_connect("localhost","root","","confic");
        $consulta = "INSERT INTO g1(name,identificacion,number,email,novedades) VALUE('$name','$identificacion','$number','$email','$novedades')";
       

        $verificar_number = mysqli_query($conexion, "SELECT * FROM g1 WHERE  number = '$number'");
     if(mysqli_num_rows($verificar_number) > 0){
             echo '<script>
             alert("El Usuario ya esta Registrado");
             window.history.go(-2);
             </script>';
             exit;
     }
        
 $resultado = mysqli_query($conexion, $consulta);
        if(!$resultado){
                echo'<script>
             alert("Error al Registrar");
             window.history.go(-1);
             </script>'; 
              } 
       else{
            echo '<script>
            alert("Usuario  Registrado Exitosamente");
            window.history.go(-1);
            </script>';    
       }
        mysqli_close($conexion);



        ?>
