<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
include("conexion.php");
$consulta="SELECT * FROM cliente";
$res=mysqli_query($con, $consulta);

?>
<h1>Listado de Clientes</h1>
<br><br>
<center><table border="2" width="60%">
<tr>
	<td>ID</td>
	<td>Nombre</td>
    <td>Dni</td>
    <td>Direccion</td>
    <td>Ciudad</td>
    <td>Modificar</td>
    <td>Eliminar</td>
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
			<td><a href='modcli.php?cliente_id=$vec[0]'>Modificar</a></td>
			<td><a href='modcli.php?cliente_id=$vec[0]'>Eliminar</a></td>
		</tr>
		
		";	
	}
?>
</table></center>
</body>
</html>