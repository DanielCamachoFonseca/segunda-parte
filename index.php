<!DOCTYPE html>
<html lang="es">
  <head>
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="${Path To Your Fav Icon}/favicon.ico">
    <title>Formulario</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <!---Parte del codigo donde utilizo una herramienta de bootstrap para hacer una barra de navegacion -->
    <header>
      <div class="contenedor">
        <div id="marca">
          <h1><span class="resaltado">Diseño</span> y desarrollo web</h1>
        </div>
        <nav>
          <ul>
            <li class="actual"><a href="index.html">Inicio</a></li>
            <li><a href="historia.html">Historia</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="recursos.html">Recursos</a></li>
            <li><a href="contacto.html">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <br>
    <br>
    <br>
    <br>
<!---Formulario donde le pido los datos al usuario -->
    <form id="frmajax" method="post">
      <h3>FORMULARIO</h3>
      <label>Nombre</label>
      <p></p>
      <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
      <p></p>
      <label>Apellido</label>
      <p></p>
      <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
      <p></p>
      <label>Email</label>
      <p></p>
      <input type="text" name="email" id="email" placeholder="Email@hotmail.com">
      <p></p>
      <label>Tarjeta</label>
      <p></p>
      <select name="tarjeta">
        <option>Visa</option>
        <option>Mastercard</option>
        <option>Platino</option>
      </select>
      <p></p>
      <label>N° de tarjeta</label>
      <p></p>
      <input type="text" name="numerotarjeta" id="numerotarjeta" placeholder="272829..">
      <p></p>
      <label>CVV</label>
      <p></p>
      <input type="text" name="cvv" id="cvv">
      <p></p>
      <label>Expiracion de su tarjeta</label>
      <p></p>
      <input id="date" type="date" name="expira">
      <p></p>
      <label>Direccion</label>
      <p></p>
      <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion de residencia">
      <p></p>
      <label>Ciudad</label>
      <p></p>
      <input type="text" name="ciudad" id="ciudad" placeholder="Ingrese su ciudad">
      <p></p>
      <label>Estado</label>
      <p></p>
      <input type="text" name="estado" id="estado" placeholder="Ingrese su estado">
      <p></p>
      <label>Pais</label>
      <p></p>
      <select name="pais">
        <option>Colombia</option>
        <option>Argentina</option>
        <option>Estados Unidos</option>
        <option>Mexico</option>
        <option>Francia</option>
        <option>España</option>
      </select>
      <p></p>
      <label>Telefono</label>
      <p></p>
      <input type="text" name="telefono" id="telefono" placeholder="Ingrese su telefono" pattern="1 2 3 4 5 6 7 8 ">
      <p></p>
      <button id="guardar" class="btn btn-primary">Enviar</button>
    </form>
    <br>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>


<!--Tabla donde se muestran todos los datos -->
    <br />

    <table width="1200" border="4" style="background-color: #FFFFFF">

      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tarjeta</th>
        <th>Numero de tarjeta</th>
        <th>CVV</th>
        <th>Expiracion de tarjeta</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Estado</th>
        <th>Pais</th>
        <th>Telefono</th>
      </tr>

      <?php
      include 'insertar.php';
      $consulta = "SELECT * FROM formulario";
      $ejecutar = mysqli_query($conexion,$consulta);
      $i = 0;

              while($fila = mysqli_fetch_array($ejecutar)){
                $nombre=$fila['nombre'];
                $apellido=$fila['apellido'];
                $email=$fila['email'];
                $tarjeta=$fila['tarjeta'];
                $numerotarjeta=$fila['numerotarjeta'];
                $cvv=$fila['cvv'];
                $expira=$fila['expira'];
                $direccion=$fila['direccion'];
                $ciudad=$fila['ciudad'];
                $estado=$fila['estado'];
                $pais=$fila['pais'];
                $telefono=$fila['telefono'];

                $i++;

       ?>

       <tr align="center">
         <td><?php echo $nombre ?></td>
         <td><?php echo $apellido ?></td>
         <td><?php echo $email ?></td>
         <td><?php echo $tarjeta ?></td>
         <td><?php echo $numerotarjeta ?></td>
         <td><?php echo $cvv ?></td>
         <td><?php echo $expira ?></td>
         <td><?php echo $direccion ?></td>
         <td><?php echo $ciudad ?></td>
         <td><?php echo $estado ?></td>
         <td><?php echo $pais ?></td>
         <td><?php echo $telefono ?></td>
         <td><a href="index.php?editar=<?php echo $nombre; ?>">Editar</a></td>
         <td><a href="index.php?borrar=<?php echo $nombre; ?>">Borrar</a></td>
       </tr>

     <?php } ?>
    </table>

    <?php
    // Bloque de codigo para editar
    if (isset($_GET['editar'])) {
      include("editar.php");
    }
     ?>

     <?php
     //Bloque de codigo donde se borran los datos
     if(isset($_GET['borrar'])){
       $borrarNombre = $_GET['borrar'];
       $borrar = "DELETE FROM formulario WHERE nombre='$borrarNombre'";
       $ejecutar = mysqli_query($conexion, $borrar);
       if($ejecutar){
         echo "<script>alert('Ha sido borraro')</script>";

       }
     }
     ?>

     <footer>
       <p>Desarrollo web, Copyright &copy; 2017</p>
     </footer>
  </body>
</html>

<!---Script para hacer el ajax y mandar los datos del formulario -->
<script type="text/javascript">
     $(document).ready(function(){
       $('#guardar').click(function(){//llamo el id del boton para hacer una accion
         var datos=$('#frmajax').serialize();//mediante el id del formulario llamo todos los datos del formulario. serialize llama todos los datos
          $.ajax({//ajax tiene 4 atributos
            type:"POST",
            url:"insertar.php",
            data:datos,//llamo todos los datos
            success:function(r){
              if(r==1){
                alert("Guardado exitoso");
              }else{
                alert("fallo");
              }
            }
          });
          return false;//No recargue la pagina
       });
     });
</script>
