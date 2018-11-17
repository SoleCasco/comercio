<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<?php
include("conexion.php");
$consulta="SELECT * FROM cliente";
$res=mysqli_query($con, $consulta);

?>
<h1 class="alert-light text-center">Listado de Clientes</h1>
<br><br>
<a href="inicio.html" class="btn btn-outline-info">Home</a>
<center><table border="2" width="auto" class="table-info">
<tr>
	<th>ID</th>
	<th>Nombre</th>
    <th>Dni</td>
    <th>Direccion</th>
    <th>Ciudad</td>
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
			<td align='right'><a href='modcli.php?cliente_id=$vec[0]' class='btn btn-outline-primary'>Modificar</a></td>
			<td align='right'><a href='eliminarCli.php?cliente_id=$vec[0]' class='btn btn-outline-primary'>Eliminar</a></td>
		</tr>";
	}
?>
</table></center>
</body>
</html>
