
<?php
  ob_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <title>OMAE Restaurante Querétaro - Página Oficial</title>
    <link rel="shortcut icon" href="views/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Restaurante Omae, Restaurantes en queretaro, menú" />
    <meta name="keywords" content="Restaurante Omae, Restaurantes en queretaro, menú" />
    <meta name="author" content="Diego Arista" />
    
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
  
    <link rel="stylesheet" href="views/css/all.min.css">
    

  <!--  <link rel="stylesheet" href="views/css/style.css"> -->
    <link rel="stylesheet" href="views/css/menu.css">

<!-- <script src="views/js/sweetalert.min.js"></script> -->
  </head>

  <!--  -->
<body>
    




	
    <?php  
	
		
		
		$modulos = new Enlaces();
		$modulos -> enlacesController();

		?>

   









</div>





</body>
</html>
<?php
ob_end_flush();
?> 
