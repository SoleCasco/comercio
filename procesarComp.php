<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
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
echo"<h1>consulta exitosa</h1>";
echo"<a href='detalleForm.php'>Cargar Productos</a>"; 
}else{ 
echo"no se ejecuto consulta"; 
} 

?>
</body>
</html>