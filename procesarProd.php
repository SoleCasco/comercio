<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Procesar Producto</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
<br><br><br><br><br><br><br>
<?PHP
include("conexion.php");

$nom=$_POST["nombre"];
$precio=$_POST["precio"];
$stock=$_POST["stock"];
$cat=$_POST["cat"];
$prov=$_POST["prov"];
$consulta="INSERT INTO producto (nombre,precio,categoria,stock,proveedor_id) VALUES ('$nom',$precio,'$cat',$stock,$prov)";
$res=mysqli_query($con,$consulta);
if($res){
	echo"<h1 class='alert-light text-center'>Registro exitoso</h1><br>";
	
}
else{
	echo"<h1 class='alert-light text-center'>No se Registro</h1><br>";
	}
echo"<center><a href='inicio.php' class='btn btn-outline-info btn-lg btn-block'>ir a home</a></center>";

?>
</body>
</html>