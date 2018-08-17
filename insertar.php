<?php
//--------------------------------En esta linea de codigo lo que hago es la conexion con la base de datos-------------------------
   $conexion=mysqli_connect('localhost','root','','form');

   $nombre=@$_POST['nombre'];
   $apellido=@$_POST['apellido'];
   $email=@$_POST['email'];
   $tarjeta=@$_POST['tarjeta'];
   $numerotarjeta=@$_POST['numerotarjeta'];
   $cvv=@$_POST['cvv'];
   $expira=@$_POST['expira'];
   $direccion=@$_POST['direccion'];
   $ciudad=@$_POST['ciudad'];
   $estado=@$_POST['estado'];
   $pais=@$_POST['pais'];
   $telefono=@$_POST['telefono'];

   //-------------------------------En esta parte del codigo lo que hago es la insercion de los datos en la base de datos----------
   $sql="INSERT into formulario (nombre, apellido, email, tarjeta, numerotarjeta, cvv, expira, direccion, ciudad, estado, pais, telefono)
    values ('$nombre','$apellido','$email','$tarjeta','$numerotarjeta','$cvv','$expira','$direccion','$ciudad','$estado','$pais','$telefono')";
    echo mysqli_query($conexion,$sql);
 ?>
