<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar lista Proveedores</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<h1 class="alert-light text-center">Formulario de Modificacion</h1>
<br><br><br>
<a href="inicio.html" class="btn btn-outline-info">Home</a>
<?php
include("conexion.php");
$id=$_GET["proveedor_id"];
$consulta="SELECT * FROM proveedor WHERE id=$id";
$res=mysqli_query($con,$consulta);
while($vec=mysqli_fetch_array($res)){
echo"
	<center><form method='post' action='procesarModProv.php'>
		<table border='2' width='30%' class='table-info'>
			<tr>
			<td>ID</td>
			<td><input type='int' name='id' value='$vec[0]' readonly class='form-control'></td>
		</tr>
		<tr>
			<td>Razon Social </td>
			<td><input type='text' name='razon' value='$vec[1]' class='form-control'></td>
		</tr>
		<tr>
			<td>Direccion</td>
			<td><input type='int' name='dir' value='$vec[2]' class='form-control'></td>
		</tr>
		<tr>
			<td>Calidad</td>
			<td><input type='text' name='cal' value='$vec[3]' class='form-control'></td>
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
