<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Procesar Detalle</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<br><br><br><br><br><br><br>
<?php
include("conexion.php");
$comp=$_POST["compraId"];
$prod=$_POST["prod"];
$cant=$_POST["cant"];
$subt=0;
$importe=0;
$consulta="SELECT compra.*, producto.* FROM compra, producto WHERE compra.id=$comp AND producto.id=$prod";
$res=mysqli_query($con,$consulta);
if($res){
while($vec=mysqli_fetch_array($res)){
	if($vec[9] > $cant)
	{
		$consulta2="INSERT INTO detallecompra (compra_id, producto_id, cantidad) VALUES ($comp,$prod,$cant)";
		$res2=mysqli_query($con, $consulta2);
		if($res2){
			if($vec[2]=="Efectivo"){

				$subt= $cant * $vec[7];
				$importe=$subt -($subt * 0.1);

			}
			else{
				$subt=$cant * $vec[7];
				$importe=$subt +($subt * 0.05);
			}
			$consulta3="UPDATE compra SET total=($vec[3]+ $importe) WHERE compra.id=$comp ";
			$res3=mysqli_query($con, $consulta3);
			$consulta4="UPDATE producto SET stock=($vec[9]- $cant) WHERE producto.id= $prod";
			$res4=mysqli_query($con, $consulta4);
			echo"<h1 class='alert-light text-center'>Registro exitoso</h1><br>";
			echo"<a href='compraForm.php' class='btn btn-outline-info btn-lg btn-block'>Cargar otro Producto</a><br>";

		}
	}
	else{
		echo"<h1 class='alert-light text-center'>Producto sin Stock</h1><br>";
		echo"<center><a href='compraForm.php' class='btn btn-outline-info btn-lg btn-block'>Cargar otro Producto</a></center><br>";

	}
}
}
else{
	echo"<h1 class='alert-light text-center'>Error de Consulta</h1><br>";
	}
echo"<center><a href='inicio.php' class='btn btn-outline-info btn-lg btn-block'>ir a home</a></center>";
if ($vec[9]<=4){
	echo '<script language="javascript">alert("El Stock del producto comprado es igual o menor a 4");</script>';

}
?>
</body>
</html>
