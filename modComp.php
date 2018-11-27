<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar lista Compras</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
<br><br>
<h1 class="alert-light text-center">Formulario de Modificacion</h1>
<br><br><br>
<a href="inicio.php" class="btn btn-outline-info">Home</a>
<?php
include("conexion.php");
$id=$_GET["compra_id"];
$consulta="SELECT * FROM compra WHERE id=$id";
$res=mysqli_query($con,$consulta);
$consulta2='SELECT * FROM cliente';
$res2=mysqli_query($con,$consulta2);
?>	
	<center><form action="procesarComp.php" method="post"> 
    <table border="2" width="auto" class="table-info"> 
	<?php
	while($vec=mysqli_fetch_array($res)){
		echo"<tr>
				<td>ID</td>
				<td><input type='int' name='id' value='$vec[0]' readonly class='form-control'></td>
			</tr>
			<tr>
				<td>Fecha </td>
				<td><input type='date' name='fec' value='$vec[1]' class='form-control'required></td>
			</tr>";}
	?>		
			<tr>
				<td>Forma de Pago </td>
				<td>
				<select name='pag' class='form-control'> 
            	<option value=''>Seleccionar</option> 
            	<option value='Efectivo'>Efectivo</option> 
            	<option value='Tarjeta'>Tarjeta de Credito</option> 
            	</select> 
        		</td>
			</tr>
			<tr>
				<td>Cliente </td>
				<td>
				<select name='cli' class='form-control'> 
				<option value=''>Seleccionar</option> 
					<?php
            		while($vec2=mysqli_fetch_array($res2)){ 
            		echo"<option value='$vec2[0]'>$vec2[1]</option>";}
					?> 
            	</select>
            	</td>
			</tr>
			
			<tr>
				<td colspan='2' align='right'><input type='submit' name='Modificar' value='Modificar' class='btn btn-outline-primary'></td>
			</tr>
</table>
</form></center>
</body>
</html>				