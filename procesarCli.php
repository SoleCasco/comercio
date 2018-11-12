<?php
include("conexion.php");
$nomyape=$_POST["nombre"];
$dni=$_POST["dni"];
$dir=$_POST["dire"];
$ciu=$_POST["ciu"];

$consulta="INSERT INTO clientes (nomyape,dni,direccion,ciudad) VALUES ('$nomyape',$dni,'$dir','$ciu')";
$res=mysqli_query($con,$consulta);
if($res)
{
	echo"consulta exitosa";
}
else{
	echo"se rompio todo";
}

?>