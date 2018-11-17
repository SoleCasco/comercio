<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Procesar Producto</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
<br><br><br><br><br><br><br>
<?php
include("conexion.php");
$nomyape=$_POST["nombre"];
$dni=$_POST["dni"];
$dir=$_POST["dire"];
$ciu=$_POST["ciu"];

$consulta="INSERT INTO cliente (nomyape,dni,direccion,ciudad) VALUES ('$nomyape',$dni,'$dir','$ciu')";
$res=mysqli_query($con,$consulta);
if($res)
{
	echo"<h1 class='alert-light text-center'>Registro exitoso</h1><br>";
}
else{
	echo"<h1 class='alert-light text-center'>No Se Registro</h1><br>";
}
echo"<center><a href='inicio.html' class='btn btn-outline-info btn-lg btn-block'>ir a home</a></center>";
?>

</body>
</html>