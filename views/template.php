<?php
ob_start();
?> <!DOCTYPE html><html lang="es"><head><meta charset="utf-8"><title>OMAE Restaurante en Querétaro - Página Oficial</title><link rel="stylesheet" href="views/css/bootstrap.min.css"><link rel="stylesheet" href="views/css/all.min.css"><link rel="stylesheet" href="views/css/menu.css"><link rel="shortcut icon" href="views/favicon.ico" type="image/x-icon"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"><meta name="description" content="Restaurante Omae, Restaurantes en queretaro, menú"><meta name="keywords" content="Restaurante Omae, Restaurantes en queretaro, menú"><meta name="author" content="Diego Arista"></head><!--  --><body> <?php  
      $modulos = new Enlaces();
      $modulos -> enlacesController();

      ?> </body></html> <?php
ob_end_flush();
?>