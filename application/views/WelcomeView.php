<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "static/styles/bootstrap.css" ?>">

	<title>Hola mundo</title>
</head>
<body>

	<div class="container-fluid vh-100 bg-dark">
		<h1 class="text-white">Hola Mundo</h1>
	</div>

	<script defer src="<?php echo base_url() . "static/js/bootstrap.min.js" ?>" type="text/javascript"></script>
	<script defer src="<?php echo base_url() . "static/js/app.js" ?>" type="text/javascript"> </script>
</body>
</html>
