<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Total ventas</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<h1 class="alert-light text-center">Calcular Recaudación</h1>
<br><br><br>
<a href="inicio.html" class="btn btn-outline-info">Home</a>
<br>
<center><form method="post" action="totalVentas.php">
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
        	<td colspan="2" align="right"><input type="submit" name="Listar" value="Calcular"class='btn btn-outline-primary'></td>
        </tr>
    
</form>
<?php
include("conexion.php");
if(isset($_POST["Listar"])){
	$fi=$_POST["fi"];
	$ff=$_POST["ff"];
	$consulta="SELECT SUM(compra.total) FROM compra WHERE compra.fecha BETWEEN '$fi' AND '$ff'";
	$res=mysqli_query($con,$consulta);
	
	while($v=mysqli_fetch_array($res))
	{
		echo "
				<tr>
					<th colspan='2' class='text-center'>Monto total </th>
				</tr>
				<tr>
					<td colspan='2' class='text-center'>$ $v[0]</td>
				</tr>
			</table></center>";}
}
?>
</body>
</html>