<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<h1 class="alert-light text-center">Listar Productos por Categoria</h1>
<br><br><br>
<a href="inicio.html" class="btn btn-outline-info">Home</a>
<br><br>
<center><form method="post" action="listarPorCategoria.php">
	<table width="10%" border="2" class="table-info">
    	<tr>
        <th>Categoria</th>
        </tr>
        <tr>
        	<td><select name="cat" class="form-control">
            		<option value="">Seleccionar</option>
                    <option value="Computacion">Computacion</option>
                    <option value="Deportes">Deportes</option>
                    <option value="Libreria">Libreria</option>
                    <option value="Muebleria">Muebleria</option>
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
$cat=$_POST["cat"];
$consulta="SELECT producto.*,proveedor.* FROM producto,proveedor WHERE producto.categoria='$cat' AND producto.proveedor_id=proveedor.id";
$res=mysqli_query($con,$consulta);
echo"
<center><table width='auto' border='2' class='table-info'>
	<tr>
    	<th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Stock</th>
        <th>Proveedor</th>
    </tr>
";
while($vec=mysqli_fetch_array($res)){
	echo"
	<tr>
    	<td>$vec[0]</th>
        <td>$vec[1]</th>
        <td>$vec[2]</th>
        <td>$vec[3]</th>
        <td>$vec[4]</th>
        <td>$vec[7]</th>
    </tr>";}
echo"</table></center>";
}
?>
</body>
</html>