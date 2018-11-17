<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
include("conexion.php");
	$usuario=$_POST["usuario"];
	$password=$_POST["contra"];
	
	$consulta="INSERT INTO usuario (user,pass) VALUES ('$usuario','$password')";
	$res=mysqli_query($con,$consulta);
	if($res){
		echo"<h1 class='alert-light text-center'>Registro Exitoso</h1><br>";
	}
	else{
		echo"<h1 class='alert-light text-center'>No Se Encuentra Registrado</h1><br>";
		
	}
echo"<a href='index.html' class='btn btn-outline-info btn-lg btn-block'>Inicio</a>";
?>
</body>
</html>