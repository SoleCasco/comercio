<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
include("conexion.php");
$consulta="SELECT compras.id FROM compras ORDER BY 1 DESC LIMIT 1";
$res=mysqli_query($con,$consulta);
$consulta2="SELECT * FROM productos";
$res2=mysqli_query($con,$consulta2);

?>
<h1>Carrito de compra</h1>
<br><br>
<form action="procesarDet.php" method="post">
	<table border="2" width="200">
    	<tr>
        	<td>Codigo de Compra</td>
            <td><?php
				while($vec=mysqli_fetch_array($res)){
					echo"<input type='int' name='compraId' value='$vec[0]' readonly>";	
				}
            ?>
            </td>
        </tr>
        <tr>
        	<td>Producto</td>
            <td>
            	<select name="prod">
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
            <td><input type="int" name="cant" required></td>
        </tr>
        <tr>
        	<td colspan="2"><input type="submit" name="registrar" value="registrar"></td>
            
        </tr>
    </table>

</form>
</body>
</html>