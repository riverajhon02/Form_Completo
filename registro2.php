<?php

  $conexion=mysqli_connect("localhost","root","","usuario");
               
  ?>

  <?php

    $i=$_POST['ident'];
    $n=$_POST['nombre1'];
    $n1=$_POST['nombre2'];
    $a=$_POST['apellido1'];
    $a1=$_POST['apellido2'];
    $sexo=$_POST['customRadioInline1'];
    $usuario=$_POST['usuario'];
    $cel=$_POST['cel'];
    $tel=$_POST['tel'];
    $fax=$_POST['fax'];
    $ciudad=$_POST['ciudad'];
    $codp=$_POST['codP'];
    $correo=$_POST['correo'];

  


   

        header("Location: index.php?code=1");  
        $insertar="INSERT INTO datos(Usu_Identificacion,Usu_Nombre1,Usu_Nombre2,Usu_APellido1,Usu_Apellido2,
        Usu_Sexo,Usu_User,Usu_Celular,Usu_Telefono,Usu_Fax,Usu_Ciudad,Usu_CodPostal,Usu_Correo)
         VALUES ('$i','$n','$n1','$a','$a1','$sexo','$usuario','$cel','$tel','$fax','$ciudad','$codp','$correo')";
        $resul=mysqli_query($conexion,$insertar);
  
      
              
      mysqli_close($conexion);

    

    
?>


