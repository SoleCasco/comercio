<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Procesar Registro</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<br><br><br><br><br><br>
<?php
include("conexion.php");
$razon=$_POST["razon"];
$dir=$_POST["dire"];
$cal=$_POST["calidad"];
$consulta="INSERT INTO proveedor (razonsocial,direccion,calidad)VALUES('$razon','$dir','$cal')";
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