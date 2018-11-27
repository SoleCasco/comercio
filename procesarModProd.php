<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificacion Procucto</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>

<body>
<br><br><br>
<?php
include("conexion.php");
$id=$_POST["id"];
$nombre=$_POST["nom"];
$precio=$_POST["pre"];
$categoria=$_POST["cat"];
$stock=$_POST["sto"];
$proveedor=$_POST["pro"];
$consulta="UPDATE producto SET nombre='$nombre', precio=$precio, categoria='$categoria', stock=$stock, proveedor_id='$proveedor' WHERE id=$id";
$res=mysqli_query($con,$consulta);
if($res){
	echo"<h1 class='alert-light text-center'>Registro Exitoso</h1><br>";
}
else{
	echo"<h1 class='alert-light text-center'>No Se Registro</h1><br>";
}
echo"<center><a href='listarProd.php' class='btn btn-outline-info btn-lg btn-block'>Nueva Modificacion</a></center>";
?>
</body>
</html>
