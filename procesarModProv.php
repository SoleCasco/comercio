<!DOCTYPE html>
<html lang="es" dir="ltr">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <br><br><br>
    <?php
    include("conexion.php");
    $id=$_POST["id"];
    $razon=$_POST["razon"];
    $dir=$_POST["dir"];
    $cal=$_POST["cal"];
    $consulta="UPDATE proveedor SET id=$id, razonsocial='$razon', direccion='$dir', calidad='$cal' WHERE id=$id";

    $res=mysqli_query($con, $consulta);
    if($res){
      echo"<h1 class='alert-light text-center'>Registro exitoso</h1><br>";
    }else{
      echo"<h1 class='alert-light text-center'>no se Registro</h1><br>";
    }

  echo"<center><a href='inicio.php' class='btn btn-outline-info btn-lg btn-block'>ir a home</a></center>";


     ?>

  </body>
</html>
