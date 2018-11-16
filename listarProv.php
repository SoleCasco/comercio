<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listado de Proveedores</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<?php
include("conexion.php");
$consulta="SELECT * FROM proveedor";
$res=mysqli_query($con, $consulta);

?>
<h1 class="alert-light text-center">Listado de Proveedores</h1>
<br><br>
<a href="inicio.html" class="btn btn-outline-info">Home</a>
<center><table border="2" width="auto" class="table-info">
<tr>
	<th>ID</th>
	<th>Razon Social</th>
    <th>Direccion</th>
    <th>Calidad</th>
    <th>Modificar</th>
    <th>Eliminar</th>
</tr>
<?php
	while($vec=mysqli_fetch_array($res)){
		echo"
		<tr>
			<td>$vec[0]</td>
			<td>$vec[1]</td>
			<td>$vec[2]</td>
			<td>$vec[3]</td>
			<td align='right'><a href='modProv.php?proveedor_id=$vec[0]' class='btn btn-outline-primary'>Modificar</a></td>
			<td align='right'><a href='eliminarProv.php?proveedor_id=$vec[0]' class='btn btn-outline-primary'>Eliminar</a></td>
		</tr>

		";
	}
?>
</table></center>
</body>
</html>
