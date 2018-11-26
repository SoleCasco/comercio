<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listado de Compras</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<?php
include("conexion.php");
$consulta="SELECT compra.*,cliente.nomyape FROM compra,cliente WHERE compra.cliente_id=cliente.id";
$res=mysqli_query($con, $consulta);

?>
<br>
<h1 class="alert-light text-center">Listado de Compras</h1>
<br><br>
<a href="inicio.php" class="btn btn-outline-info">Home</a>
<center><table border="2" width="auto" class="table-info">
<tr>
	<th>ID</th>
	<th>Fecha</th>
    <th>Forma de Pago</th>
    <th>Total</th>
	<th>Cliente ID</th>
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
      		<td>$vec[5]</td>
			<td align='right'><a href='modComp.php?compra_id=$vec[0]' class='btn btn-outline-primary'>Modificar</a></td>
			<td align='right'><a href='eliminarComp.php?compra_id=$vec[0]' class='btn btn-outline-primary'>Eliminar</a></td>
		</tr>

		";
	}
?>
</table></center>
</body>
</html>
