<?php
        

        
        $name =$_POST['name'];
        $username =$_POST['username'];
        $password =$_POST['password'];


        $conexion = mysqli_connect("localhost","root","","confic");
        $consulta = "INSERT INTO user(name,username,password) VALUE('$name','$username','$password')";
       

        $verificar_username = mysqli_query($conexion, "SELECT * FROM user WHERE  username = '$username'");
     if(mysqli_num_rows($verificar_username) > 0){
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
