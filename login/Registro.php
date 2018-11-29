<?php

        $Name =$_POST['Name'];
        $Nameu =$_POST['Nameu'];
        $Identificacion =$_POST['Identificacion'];
        $Number =$_POST['Number'];
        $Email =$_POST['Email'];
        $Novedades =$_POST['Novedades'];


        $conexion = mysqli_connect("localhost","root","","confic");
        $consulta = "INSERT INTO inventario(Name,Nameu,Identificacion,Number,Email,Novedades) VALUE('$Name''$Nameu''$Identificacion''$Number','$Email','$Novedades')";
       

        $verificar_Number = mysqli_query($conexion, "SELECT * FROM inventario WHERE  Number = '$Number'");
     if(mysqli_num_rows($verificar_Number) > 0){
             echo '<script>
             alert("El Usuario ya esta Registrado");
             window.history.go(-1);
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
