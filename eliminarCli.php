<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("conexion.php");
    $id=$_GET["cliente_id"];
    $ban=0;
    $consulta="SELECT * FROM compra WHERE cliente_id=$id";
    $res=mysqli_query($con,$consulta);
    while($vec=mysqli_fetch_array($res)){
      if($vec[4]==$id){
        echo"<h1 class='alert=light text-center'> No se puede Eliminar</h1><br>";
        $ban=1;
      }
    }

      if($ban==0){
        $consulta2="DELETE FROM cliente WHERE cliente.id=$id";
        $res2=mysqli_query($con, $consulta2);
        if($res2){
        echo"<h1 class='alert-light text-center'>Cliente eliminado</h1>";
      }
    }
echo"<a href='inicio.html' class='btn btn-outline-info'>Ir a Home</a>";
    ?>
  </body>
</html>
