<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
include("conexion.php");
$razon=$_POST["razon"];
$dir=$_POST["dire"];
$cal=$_POST["calidad"];
$consulta="INSERT INTO proveedor (razonsocial,direccion,calidad)VALUES('$razon','$dir','$cal')";
$res=mysqli_query($con,$consulta);
if($res){
	echo"consulta exitosa<br>";
}
else{
	echo"No se ejecuto<br>";	
}
echo"<a href='Home.html'>ir a home</a>";
?>
</body>
</html>