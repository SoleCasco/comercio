<!DOCTYPE html>
<html lang="es" dir="ltr">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("conexion.php");
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $dni=$_POST["dni"];
    $dir=$_POST["dir"];
    $ciu=$_POST["ciu"];
    $consulta="UPDATE cliente SET id=$id, nomyape='$nombre', dni=$dni, direccion='$dir', ciudad='$ciu' WHERE id=$id";

    $res=mysqli_query($con, $consulta);
    if($res){
      echo"<h1 class='alert_light text-center'>Registro exitoso</h1><br>";
    }else{
      echo"<h1 class='alert_light text-center'>no se Registro</h1><br>";
    }

    echo"<a href='inicio.html' class='btn btn-outline-info'>Ir a Home</a>";


     ?>

  </body>
</html>
