<!DOCTYPE html>
<html>
<head>
	<title>Menú CFT</title>
	<script src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="funciones.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
</head>
<body>
	<?php 
require 'partials/barra.php';
	 ?>
	 <h1 align="center">Menú CFT</h1>
	<div class="contenedor">
	
<div class=" opc opciones">
	 <h1 class="h_op">Asignacion de Alumnos</h1>
	<img src="imagenes/item3.jpg">
	<a class="r az" href="asign_alumno.php">Ir</a>
</div>

<div class=" opc opciones_1">
	 <h1 class="h_op">Alumnos</h1>
	<img src="imagenes/item2.jpg">
	<a class="r mr" href="agregar_alumnos.php">Ir</a>
</div>

<div class=" opc opciones_2">
	 <h1 class="h_op">Profesor Supervisor</h1>
	<img src="imagenes/psup.jpg">
	<a class="r az" href="form_psup.php">Ir</a>
</div>

<div class=" opc opciones_3">
	<h1 class="h_op">Empresas</h1>
	<img src="imagenes/emp.jpg">
	<a class="r mr" href="form_emp.php">Ir</a>
</div>

<div class=" opc opciones_4">
	 <h1 class="h_op">Reportes</h1>
	<img src="imagenes/rep.jpg">
	<a class="r az" href="Reportes_CFT.php">Ir</a>
</div>

<div class=" opc opciones_5">
	 <h1 class="h_op">Solicitudes</h1>
	<img src="imagenes/sol.jpg">
	<a class="r mr" href="Solicitudes_cft.php">Ir</a>
</div>

</div>

</body>
</html>
<script type="text/javascript">
	$('#btn_ir_a').click(function(){
		ir_a_menuCFT();
	});
</script>