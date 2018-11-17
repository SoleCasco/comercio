<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
<h1 class="alert-light text-center">Listar Compras Por Fecha</h1>
<br><br><br><br>
<a href="inicio.html" class="btn btn-outline-info">Home</a>
<br><br>
<center><form method="post" action="listarPorFecha.php">
	<table width="auto" border="2" class="table-info">
    	<tr>
        	<td>Fecha Desde</td>
            <td><input type="date" name="fi" class="form-control"></td>
        </tr>
        <tr>
        	<td>Fecha Hasta</td>
            <td><input type="date" name="ff" class="form-control"></td>
        </tr>
        <tr>
        	<td colspan="2" align="right"><input type="submit" name="Listar" value="Listar"class='btn btn-outline-primary'></td>
        </tr>
    </table>
</form></center>
<br><br><br>
<?php 
include("conexion.php");
if(isset($_POST["Listar"])){
	
	$fi=$_POST["fi"];
	$ff=$_POST["ff"];
	$dif=0;
	$consulta="SELECT compra.*,cliente.*,detallecompra.*,producto.* FROM compra,cliente,detallecompra,producto WHERE cliente.id=compra.cliente_id AND detallecompra.compra_id=compra.id AND producto.id=detallecompra.producto_id AND compra.fecha BETWEEN '$fi' AND '$ff' ";
	$res=mysqli_query($con,$consulta );
	echo"
	<center><table width='auto' border='2' class='table-info'>
		<tr>
			<th>Fecha de Compra</th>
			<th>Forma de Pago</th>
			<th>Total</th>
			<th>Cliente</th>
			<th>Producto</th>
			<th>cantidad</th>
			<th>Precio</th>
			<th>Desc/incr</th>
		</tr>";
	while($vec=mysqli_fetch_array($res)){
		echo"
		<tr>
			<td>$vec[1]</td>
			<td>$vec[2]</td>
			<td>$vec[3]</td>
			<td>$vec[6]</td>
			<td>$vec[15]</td>
			<td>$vec[13]</td>
			<td>$vec[16]</td>";
			if($vec[2]=="Efectivo"){
			$dif=($vec[13]*$vec[16])*0.1;
			echo"
				<td>- $dif</td>
			
			";}
		else{
			$dif=($vec[13]*$vec[16])*0.05;
			echo"
				<td>+ $dif</td>
			";}
		echo"</tr>";	
	}
	echo"</table></center>";
	}
?>
</body>
</html>