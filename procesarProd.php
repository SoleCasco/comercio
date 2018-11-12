<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Procesar Producto</title>
</head>
<body>
<?PHP
include("conexion.php");

$nom=$_POST["nombre"];
$precio=$_POST["precio"];
$stock=$_POST["stock"];
$cat=$_POST["cat"];
$prov=$_POST["prov"];
$consulta="INSERT INTO productos (nombre,punitario,categoria,stock,proveedor_id) VALUES ('$nom',$precio,'$cat',$stock,$prov)";
$res=mysqli_query($con,$consulta);
if($res){
	echo"Consulta Exitosa <br>";
	echo"<a href='index.html'>home</a>";
}
else{
	echo"Error de Consulta <br>";
	echo"<a href='index.html'>home</a>";}

?>
</body>
</html>