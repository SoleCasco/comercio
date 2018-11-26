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


			if (strlen($password) >= 8)
			{
				$consulta1="SELECT * FROM usuario";
				$res1=mysqli_query($con,$consulta1);
				while($vec=mysqli_fetch_array($res1))
				{
					if($vec[1]==$usuario){
						echo "El usuario ya existe, por favor ingrese otro nombre de usuario";
						$ban=1;
					}
					

				}

			if($ban==0){
				$consulta="INSERT INTO usuario (user,pass) VALUES ('$usuario','$password')";
				$res=mysqli_query($con,$consulta);
				echo"<h1 class='alert-light text-center'>Registro Exitoso</h1><br>";
				echo"<a href='inicio.php' class='btn btn-outline-info btn-lg btn-block'>Inicio</a>";
			}

			else{
					echo"<h1 class='alert-light text-center'>La contraseña debe tener 8 o mas caracteres</h1><br>";
					echo"<center><a href='userForm.html' class='btn btn-outline-info btn-lg btn-block'>Volver</a></center>";
			}
?>
</body>
</html>
