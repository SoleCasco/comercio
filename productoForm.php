<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar Producto</title>
</head>
<body>
<h1>Formulario producto</h1>
<br><br><br>
<?php
include("conexion.php");
$consulta="SELECT * FROM proveedor";
$res=mysqli_query($con,$consulta);
?>
<form method="post" action="procesarProd.php">
	<table border="2" width="200">
    	<tr>
        	<td>Nombre</td>
            <td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
        	<td>Precio unitario</td>
            <td><input type="number" name="precio" required></td>
        </tr>
        <tr>
        	<td>Stock</td>
            <td><input type="int" name="stock" required></td>
        </tr>
        <tr>
        	<td>Proveedor</td>
            <td>
            	<select name="prov">
                	<option value="">seleccione Proveedor</option>
                    <?php
						while($vec=mysqli_fetch_array($res)){	
						echo"
							<option value='$vec[0]'>$vec[1]</option>
						";}
            		?>
            	</select>
            </td>
        </tr>
        <tr>
        	<td>Categoria</td>
            <td>
            	<select name="cat">
            		<option value="">Seleccione categoria</option>
            		<option value="Muebleria">Muebleria</option>
            		<option value="Libreria">Libreria</option>
            		<option value="Deportes">Deportes</option>
            		<option value="Computacion">Computacion</option>
            	</select>
            </td>
        </tr>
        <tr>
        	<td colspan="2"><input type="submit" name="Registrar" value="Registrar"></td>
        </tr>
    </table>
</form>
</body>
</html>