<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listado de Productos</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<?php
include("conexion.php");
$consulta="SELECT producto.*, proveedor.razonsocial FROM producto,proveedor WHERE producto.proveedor_id=proveedor.id";
$res=mysqli_query($con, $consulta);

?>
<h1 class="alert-light text-center">Listado de Productos</h1>
<br><br>
<a href="inicio.php" class="btn btn-outline-info">Home</a>
<center><table border="2" width="auto" class="table-info">
<tr>
	<th>ID</th>
	<th>Nombre</th>
    <th>Precio</th>
    <th>Categoria</th>
    <th>Stock</th>
    <th>Proveedor</th>
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
			<td>$vec[4]</td>
			<td>$vec[6]</td>
			<td align='right'><a href='modProd.php?producto_id=$vec[0]' class='btn btn-outline-primary'>Modificar</a></td>
			<td align='right'><a href='eliminarProd.php?producto_id=$vec[0]' class='btn btn-outline-primary'>Eliminar</a></td>
		</tr>

		";
	}
?>
</table></center>
</body>
</html>
