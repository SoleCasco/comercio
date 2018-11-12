<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<!DOCTYPE html> 
<html lang="es" dir="ltr"> 
<head> 
<meta charset="utf-8"> 
<title>Registro de Compras</title> 
</head> 
<body> 
<?php 
include("conexion.php"); 
$consulta="SELECT * FROM cliente"; 
$res=mysqli_query($con,$consulta); 
?> 
<h1>Formulario de Registro de Compras</h1> 
<br><br> 
<form class="" action="procesarComp.php" method="post"> 
    <table border="2" width="200"> 
        <tr> 
            <td>Fecha</td> 
            <!--required verifica si el campo contiene algo--> 
            <td><input type="date" name="fec" required></td> 
        </tr> 
        <tr> 
            <td>Forma de Pago</td> 
            <td> 
            <select class="" name="pag"> 
            <option value="">Seleccione una Forma de Pago</option> 
            <option value="efectivo">Efectivo</option> 
            <option value="tarjetacred">Tarjeta de Credito</option> 
            </select> 
            </td> 
        </tr>  
        <tr> 
            <td>Cliente</td> 
            <td> 
            <select class="" name="cli"> 
            <option value="">Seleccione Cliente</option> 
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
        <td colspan="2"><input type="submit" name="Registrar" value="Registrar"></td> 
        </tr> 
    
    </table> 
</form> 

</body> 
</html>
</body>
</html>