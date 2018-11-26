<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar Producto</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
<h1 class="alert-light text-center">Formulario producto</h1>
<br><br><br>
<a href="inicio.php" class="btn btn-outline-info">Home</a>
<br><br>
<?php
include("conexion.php");
$consulta="SELECT * FROM proveedor";
$res=mysqli_query($con,$consulta);
?>
<center><form method="post" action="procesarProd.php">
	<table border="2" width="auto" class="table-info">
    	<tr>
        	<td>Nombre</td>
            <td><input type="text" name="nombre" class="form-control" required></td>
        </tr>
        <tr>
        	<td>Precio unitario</td>
            <td><input type="number" name="precio" class="form-control" required></td>
        </tr>
        <tr>
        	<td>Stock</td>
            <td><input type="int" name="stock" class="form-control" required></td>
        </tr>
        <tr>
        	<td>Proveedor</td>
            <td>
            	<select name="prov"  class="form-control">
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
            	<select name="cat"  class="form-control">
            		<option value="">Seleccione categoria</option>
            		<option value="Muebleria">Muebleria</option>
            		<option value="Libreria">Libreria</option>
            		<option value="Deportes">Deportes</option>
            		<option value="Computacion">Computacion</option>
            	</select>
            </td>
        </tr>
        <tr>
        	<td colspan="2" align="right"><input type="submit" name="Registrar" value="Registrar" class='btn btn-outline-primary'></td>
        </tr>
    </table>
</form></center>
</body>
</html>