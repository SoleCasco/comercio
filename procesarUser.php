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

	$consulta="SELECT user FROM usuario";
	$res=mysqli_query($con,$consulta);


	if ($usuario!="" & $password!="")
	{
			if (strlen($password) >= 8)
			{
	//aqui se verifica qeu el valor ingresado como usuario no exixta ya en la BD
	//esta parte no funciona tira un error
			if (array_search('$usuario', $res))
			{
				$consulta="INSERT INTO usuario (user,pass) VALUES ('$usuario','$password')";
				echo"<h1 class='alert-light text-center'>Registro Exitoso</h1><br>";
				echo"<a href='index.html' class='btn btn-outline-info btn-lg btn-block'>Inicio</a>";

			}else{
				echo "El usuario ya existe, por favor ingrese otro nombre de usuario";
			}
				}else{
					echo"<h1 class='alert-light text-center'>La contraseña debe tener 8 o mas caracteres</h1><br>";
					echo"<center><a href='userForm.html' class='btn btn-outline-info btn-lg btn-block'>Volver</a></center>";
			}

		}else{
			echo"<h1 class='alert-light text-center'>El campo usuario o contraseña esta vacio</h1><br>";
			echo"<center><a href='userForm.html' class='btn btn-outline-info btn-lg btn-block'>Volver</a></center>";
		}



?>
</body>
</html>
