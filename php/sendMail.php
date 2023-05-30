<?php

	$para      = 'info@abigailtarot.com.ar';
	$titulo    = 'Consulta WEB';
	$mensaje   = $_POST['message'];
	$cabeceras = 'From: '.$_POST['email'] ;

	mail($para, $titulo, $mensaje, $cabeceras);

	header("Location: http://www.abigailtarot.com.ar/");
	exit();
?>