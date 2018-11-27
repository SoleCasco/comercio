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
	$ban=0;
	$consulta="SELECT * FROM usuario";
	$res=mysqli_query($con,$consulta);
	while($vec=mysqli_fetch_array($res))
	{
		if($vec[1]==$usuario & $vec[2]==$password)
		{
			if($vec[3]=="Si"){
			echo"<h1 class='alert-light text-center'>Bienvenido $usuario</h1><br>";
			echo"<center><a href='inicio.php?admin=$vec[3]' class='btn btn-outline-info btn-lg btn-block'>ir a home</a></center>";
			$ban=1;
			}
			else{
			echo"<h1 class='alert-light text-center'>Bienvenido $usuario</h1><br>";
			echo"<center><a href='inicio.php?admin='No'' class='btn btn-outline-info btn-lg btn-block'>ir a home</a></center>";
			$ban=1;
			}
		}
	}
	if($ban==0){
		echo"<h1 class='alert-light text-center'>No se Encuentra Registrado</h1><br>";
		echo"<center><a href='index.html' class='btn btn-outline-info btn-lg btn-block'>Salir</a></center>";
	}

?>
</body>
</html>