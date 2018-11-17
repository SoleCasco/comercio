<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<h1 class="alert-light text-center">Listar Productos por Calidad</h1>
<br><br><br>
<a href="inicio.html" class="btn btn-outline-info">Home</a>
<br><br>
<center><form method="post" action="listarProdPorCal.php">
	<table width="10%" border="2" class="table-info">
    	<tr>
        <th>Calidad</th>
        </tr>
        <tr>
        	<td><select name="cal" class="form-control">
            		<option value="">Seleccionar</option>
                    <option value="Alta">Alta</option>
                    <option value="Media">Media</option>
                    <option value="Baja">Baja</option>
            	</select>
            </td>
        </tr>
        <tr>
        	<td align="right"><input type="submit" name="Listar" value="Listar" class='btn btn-outline-primary'></td>
        </tr>
    </table>
</form></center>
<br><br><br>
<?php 
include("conexion.php");
if(isset($_POST["Listar"])){
$cal=$_POST["cal"];
$consulta="SELECT proveedor.*,producto.* FROM proveedor,producto WHERE proveedor.calidad='$cal' AND producto.proveedor_id=proveedor.id";
$res=mysqli_query($con,$consulta);
echo"
<center><table width='auto' border='2' class='table-info'>
	<tr>
    	<th>ID</th>
		<th>Producto</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Stock</th>
        <th>Proveedor</th>
		<th>Calidad</th>
    </tr>
";
while($vec=mysqli_fetch_array($res)){
	echo"
	<tr>
    	<td>$vec[4]</th>
        <td>$vec[5]</th>
        <td>$vec[6]</th>
        <td>$vec[7]</th>
		<td>$vec[8]</th>
        <td>$vec[1]</th>
        <td>$vec[3]</th>
    </tr>";}
echo"</table></center>";
}
?>
</body>
</html>