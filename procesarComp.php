<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Procesar Compra</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<br><br><br><br><br><br><br>
<?php 
include("conexion.php"); 
$fecha=$_POST["fec"]; 
$formapago=$_POST["pag"]; 
$cliente=$_POST["cli"]; 
//aca le decimos que inserte en la tabla compras los datos que mete el usuario. las variables que 
//son string van entre comillas 
$consulta="INSERT INTO compra (fecha,formapago,cliente_id)VALUES ('$fecha','$formapago',$cliente)"; 
$res=mysqli_query($con,$consulta); 
if($res){ 
echo"<h1 class='alert-light text-center'>Registro exitoso</h1><br>";
echo"<center><a href='detalleForm.php' class='btn btn-outline-info btn-lg btn-block'>Cargar Productos</a></center>"; 
}else{ 
echo"<h1 class='alert-light text-center'>No Se Registro</h1><br>"; 
} 
echo"<center><a href='inicio.php' class='btn btn-outline-info btn-lg btn-block'>ir a home</a></center>";
?>
</body>
</html>