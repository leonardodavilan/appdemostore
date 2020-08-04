<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Admin</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="views/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/font-awesome.min.css">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/fonts.css">
    <link rel="stylesheet" href="views/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="views/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" href="views/css/jquery-ui.min.css">
	<link rel="stylesheet" href="views/css/sweetalert.css">
	<link rel="stylesheet" href="views/css/cssFancybox/jquery.fancybox.css">

	
	<script src="views/js/jquery-2.2.0.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script>
	<script src="views/js/jquery.fancybox.js"></script>
	<script src="views/js/jquery.dataTables.min.js"></script>
	<script src="views/js/dataTables.bootstrap.min.js"></script>
	<script src="views/js/dataTables.responsive.min.js"></script>
	<script src="views/js/responsive.bootstrap.min.js"></script>
	<script src="views/js/jquery-ui.min.js"></script>
	<script src="views/js/sweetalert.min.js"></script>
	<script src="views/js/jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
	


</head>

<body>

	<div class="container-fluid">

		<section class="row">

		<!--=====================================
		COLUMNA CONTENIDO        
		======================================-->	
			
		<?php

			$modulos = new Enlaces();
			$modulos -> enlacesController();
		
		?>

		<!--====  Fin de COLUMNA CONTENIDO  ====-->

		</section>
	
	</div>

	<script src="views/js/script.js"></script>
	<script src="views/js/table_edit.js"></script>
	<script src="views/js/validarIngreso.js"></script>
	<script src="views/js/gestorSlide.js"></script>
	<script src="views/js/gestorArticulos.js"></script>
	<script src="views/js/gestorMensajes.js"></script>
	<script src="views/js/gestorPerfiles.js"></script>
	
</body>

</html>