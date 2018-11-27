<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  </head>
  <body>
  <br><br><br><br><br><br>
    <?php
    include("conexion.php");
    $id=$_GET["producto_id"];
    $ban=0;
    $consulta="SELECT * FROM producto WHERE producto_id=$id";
    $res=mysqli_query($con,$consulta);
    while($vec=mysqli_fetch_array($res)){
      if($vec[5]==0){
        $consulta1="DELETE FROM producto WHERE producto.id=$id";
        $res1=mysqli_query($con,$consulta1);
        echo"<h1 class='alert-light text-center'>Producto Eliminado</h1><br>";
        $ban=1;
      }
    }

      if($ban==0){
        echo"<h1 class='alert-light text-center'>No se puede eliminar Producto</h1>";
      }
echo"<center><a href='inicio.php' class='btn btn-outline-info btn-lg btn-block'>Ir a Home</a></center>";
    ?>
  </body>
</html>
