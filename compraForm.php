<!DOCTYPE html> 
<html lang="es" dir="ltr"> 
<head> 
<meta charset="utf-8"> 
<title>Registro de Compras</title> 
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head> 
<body> 
<?php 
include("conexion.php"); 
$consulta="SELECT * FROM cliente"; 
$res=mysqli_query($con,$consulta); 
?> 
<h1 class="alert-light text-center">Formulario de Compra</h1> 
<br><br> 
<a href="inicio.html" class="btn btn-outline-info">Home</a>
<br>
<center><form action="procesarComp.php" method="post"> 
    <table border="2" width="auto" class="table-info"> 
        <tr> 
            <td>Fecha</td> 
            <!--required verifica si el campo contiene algo--> 
            <td><input type="date" name="fec" class="form-control" required></td> 
        </tr> 
        <tr> 
            <td>Forma de Pago</td> 
            <td> 
            <select name="pag" class="form-control"> 
            <option value="">Seleccionar</option> 
            <option value="efectivo">Efectivo</option> 
            <option value="tarjetacred">Tarjeta de Credito</option> 
            </select> 
            </td> 
        </tr>  
        <tr> 
            <td>Cliente</td> 
            <td> 
            <select name="cli" class="form-control"> 
            <option value="">Seleccionar</option> 
            <?php 
            //realizamos una busqueda en la variable $res donde estan almacenados 
            //los clientes 
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
        <td colspan="2" align="right"><input type="submit" name="Registrar" value="Registrar" class='btn btn-outline-primary'></td> 
        </tr> 
    
    </table> 
</form></center> 

</body> 
</html>
</body>
</html>