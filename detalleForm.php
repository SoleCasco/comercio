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
$consulta="SELECT compra.id FROM compra ORDER BY 1 DESC LIMIT 1";
$res=mysqli_query($con,$consulta);
$consulta2="SELECT * FROM producto";
$res2=mysqli_query($con,$consulta2);

?>
<h1 class="alert-light text-center">Carrito de compra</h1>
<br><br><br>
<a href="inicio.php" class="btn btn-outline-info">Home</a>
<br>
<center><form action="procesarDet.php" method="post">
	<table border="2" width="auto" class="table-info">
    	<tr>
        	<td>Codigo de Compra</td>
            <td><?php
				while($vec=mysqli_fetch_array($res)){
					echo"<input type='int' name='compraId' value='$vec[0]' class='form-control' readonly>";	
				}
            ?>
            </td>
        </tr>
        <tr>
        	<td>Producto</td>
            <td>
            	<select name="prod" class='form-control'>
                	<option value="">Seleccione Producto</option>
				<?php
                    while($vec2=mysqli_fetch_array($res2))
                    {
                    	echo"<option value='$vec2[0]'>$vec2[1]</option>";
					}
                    ?>
            	</select>
            </td>
        </tr>
        <tr>
        	<td>Cantidad</td>
            <td><input type="int" name="cant" class='form-control' required></td>
        </tr>
        <tr>
        	<td colspan="2" align="right"><input type="submit" name="registrar" value="registrar" class='btn btn-outline-primary'></td>   
        </tr>
    </table>
</form></center>
</body>
</html>