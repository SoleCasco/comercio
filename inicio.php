<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Documento sin título</title>
<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css'>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
</head>
<body>
<a href='index.html' class="btn btn-warning float-right">Logout</a>
<?php
if(isset($_GET["admin"])){
$admin=$_GET["admin"];}
else{ $admin="No";}
echo"<h1 class='text-center alert-light'>Bienvenido a Comercio</h1>";
  echo"<nav class='navbar navbar-expand-lg bg-info navbar-light'>
  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav mr-auto'>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle ' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Clientes</a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='clienteForm.html'>Registrar</a>
          <a class='dropdown-item' href='listarCli.php'>Listar</a>
        </div>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Proveedor</a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='proveedorForm.html'>Registrar</a>
          <a class='dropdown-item' href='listarProv.php'>Listar</a>
        </div>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Productos</a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='productoForm.php'>Registrar</a>
          <a class='dropdown-item' href='listarProd.php'>Listar</a>
        </div>  
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Compras</a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='compraForm.php'>Registrar</a>
          <a class='dropdown-item' href='listarComp.php'>Listar</a>
        </div>  
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Informes</a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='listarPorFecha.php'>Listar compras por Rango de Fecha</a>
          <a class='dropdown-item' href='listarPorCategoria.php'>Listar Productos por Categoria</a>
          <a class='dropdown-item' href='listarcomporcli.php'>Listar compras de un Cliente</a>
          <a class='dropdown-item' href='listarProdPorCal.php'>Listar Productos por Calidad</a>
          <a class='dropdown-item' href='listarProdporcli.php'>Listar Productos Solicitados por un cliente</a>
          <a class='dropdown-item' href='totalVentas.php'>total en ventas</a>
        </div>
      </li>";
      if ($admin=='Si') {
		 echo"<li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Usuarios</a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='userForm.html'>Registrar</a>
          <a class='dropdown-item' href='listaruser.php'>Listar</a>
        </div>
      </li>";
      }

  echo"
  </ul>
  </div>
</nav>";
echo "<br><br><br>";
echo"<center><img src='ok.jpg' class='img-fluid' alt='Responsive image'></center>";
 ?>

</body>
</html>
