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
$res=mysqli_query($con,$consulta);
?>
<h1 class="alert-light text-center">Listar Productos por Categoria</h1>
<br><br><br>
<a href="inicio.php" class="btn btn-outline-info">Home</a>
<br><br>
<center><form method="post" action="listarcomporcli.php">
	<table width="15%" border="2" class="table-info">
    	<tr>
        <th>Cliente
        <tr>
        	<td><select name="cli" class="form-control">
            		<option value="">Seleccionar</option>
                    <?php
					while($vec=mysqli_fetch_array($res)){
					echo"
                    <option value='$vec[0]'>$vec[1]</option>
					";
                  }
				  ?>
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
if(isset($_POST["Listar"])){
	
	$cli=$_POST["cli"];
	$consulta2="SELECT cliente.*,compra.* FROM cliente,compra WHERE cliente.id=$cli AND compra.cliente_id=$cli";
	$res2=mysqli_query($con,$consulta2);
echo"
<center><table width='auto' border='2' class='table-info'>
	<tr>
    	<th>Cliente</th>
		<th>Cod Compra</th>
        <th>fecha</th>
        <th>Forma de Pago</th>
        <th>Total</th>
    </tr>
";
	while($vec2=mysqli_fetch_array($res2)){
		echo"
	<tr>
    	<td>$vec2[1]</th>
        <td>$vec2[5]</th>
        <td>$vec2[6]</th>
        <td>$vec2[7]</th>
        <td>$vec2[8]</th>
    </tr>";}
echo"</table></center>";
	
	
}
?>
</body>
</html>