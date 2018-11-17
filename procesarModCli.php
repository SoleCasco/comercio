<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>

<body>
<br><br><br>
<?php 
include("conexion.php");
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$dni=$_POST["dni"];
$dir=$_POST["dir"];
$ciu=$_POST["ciu"];
$consulta="UPDATE cliente SET nomyape='$nombre', dni=$dni, direccion='$dir', ciudad='$ciu' WHERE id=$id";
$res=mysqli_query($con,$consulta);
if($res){
	echo"<h1 class='alert-light text-center'>Registro Exitoso</h1><br>";
}
else{
	echo"<h1 class='alert-light text-center'>No Se Registro</h1><br>";
}
echo"<a href='inicio.html' class='btn btn-outline-info'>ir a home</a>";
?>
</body>
</html>