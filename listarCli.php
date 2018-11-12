<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
include("conexion.php");
$consulta="SELECT * FROM cliente";
$res=mysqli_query($con, $consulta);

?>
</body>
</html>