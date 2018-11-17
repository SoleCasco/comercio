<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<br><br>
<?php 
include("conexion.php");
	$usuario=$_POST["usuario"];
	$password=$_POST["contra"];
	
	$consulta="SELECT * FROM usuario";
	$res=mysqli_query($con,$consulta);
	while($vec=mysqli_fetch_array($res))
	{
		if($vec[1]==$usuario & $vec[2]==$password){
		echo"<h1 class='alert-light text-center'>Bienvenido $usuario</h1><br>";
		echo"<center><a href='inicio.html' class='btn btn-outline-info btn-lg btn-block'>ir a home</a></center>";
	}
	else{
		echo"<h1 class='alert-light text-center'>No Se Encuentra Registrado</h1><br>";
		echo"<center><a href='index.html' class='btn btn-outline-info btn-lg btn-block'>Inicio</a></center>";
	}
}
?>
</body>
</html>