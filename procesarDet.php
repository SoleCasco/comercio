<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
include("conexion.php");
$comp=$_POST["compraId"];
$prod=$_POST["prod"];
$cant=$_POST["cant"];
echo $comp;
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
			if($vec[2]=="efectivo"){
				
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
			echo"consulta exitosa <br>";
			echo"<a href='compraForm.php'>Cargar otro Producto</a><br>";
			echo"<a href='Home.html'>Finalizar Compra</a>";
		}
	}
	else{
		echo"cantidad de producto insuficiente.";
		echo"<a href='compraForm.php'>Cargar otro Producto</a><br>";
		echo"<a href='Home.html'>Finalizar Compra</a>";
	}
}
}
else{
	echo"error de consulta.";
	}

?>
</body>
</html>