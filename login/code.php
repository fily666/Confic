<?php
        

        
        $name =$_POST['name'];
        $username =$_POST['username'];
        $password =$_POST['password'];

        $pas_cifrado=password_hash($password,PASSWORD_DEFAULT);

        $conexion = mysqli_connect("localhost","root","","confic");
        $consulta = "INSERT INTO user(name,username,password) VALUE('$name','$username','$pas_cifrado')";
       

        $verificar_username = mysqli_query($conexion, "SELECT * FROM user WHERE  username = '$username'");
     if(mysqli_num_rows($verificar_username) > 0){
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
