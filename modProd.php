<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar Lista de Productos</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<br><br>
<h1 class="alert-light text-center">Formulario de Modificacion</h1>
<br><br><br>
<a href="inicio.php" class="btn btn-outline-info">Home</a>
<?php
include("conexion.php");
$id=$_GET["producto_id"];
$consulta="SELECT * FROM producto WHERE id=$id";
$res=mysqli_query($con,$consulta);
while($vec=mysqli_fetch_array($res)){
echo"
	<center><form method='post' action='procesarModProd.php'>
		<table border='2' width='30%' class='table-info'>
			<tr>
			<td>ID</td>
			<td><input type='int' name='id' value='$vec[0]' readonly class='form-control'></td>
		</tr>
		<tr>
			<td>Nombre </td>
			<td><input type='text' name='nom' value='$vec[1]' class='form-control'></td>
		</tr>
		<tr>
			<td>Precio</td>
			<td><input type='int' name='pre' value='$vec[2]' class='form-control'></td>
		</tr>
		<tr>
			<td>Categoria</td>
			<td><input type='text' name='cat' value='$vec[3]' class='form-control'></td>
		</tr>
		<tr>
			<td>Stock</td>
			<td><input type='text' name='sto' value='$vec[4]' class='form-control'></td>
		</tr>
		<tr>
			<td>Proveedor</td>
			<td><input type='text' name='pro' value='$vec[5]' class='form-control'></td>
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
