<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<h1 class="alert-light text-center">Formulario de Modificacion</h1>
<br><br><br>
<a href="inicio.php" class="btn btn-outline-info">Home</a>
<?php
include("conexion.php");
$id=$_GET["cliente_id"];
$consulta="SELECT * FROM cliente WHERE id=$id";
$res=mysqli_query($con, $consulta);
while($vec=mysqli_fetch_array($res)){
echo"
	<center><form method='post' action='procesarModCli.php'>
		<table border='2' width='30%' class='table-info'>
			<tr>
			<td>ID</td>
			<td><input type='int' name='id' value='$vec[0]' readonly class='form-control'></td>
		</tr>
		<tr>
			<td>Nombre y Apellido </td>
			<td><input type='text' name='nombre' value='$vec[1]' class='form-control'></td>
		</tr>
		<tr>
			<td>Dni</td>
			<td><input type='int' name='dni' value='$vec[2]' class='form-control'></td>
		</tr>
		<tr>
			<td>Direccion</td>
			<td><input type='text' name='dir' value='$vec[3]' class='form-control'></td>
		</tr>
		<tr>
			<td>Ciudad</td>
			<td><input type='text' name='ciu' value='$vec[4]' class='form-control'></td>
		</tr>
		<tr>
			<td colspan='2' align='right'><input type='submit' name='Modificar' value='Modificar' class='btn btn-outline-primary'></td>
		</tr>

    </table>
</form></center>";
}
?>
</body>
</html>
