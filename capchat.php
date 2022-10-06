<?php
	session_start();
	$code = rand(100000,999999);
	$_SESSION['code'] = $code;
	
	$largeur = 60;
	$hauteur = 25;
	$image = imagecreate($largeur, $hauteur);
	$noir = imagecolorallocate($image, 0, 0, 0);
	$blanc = imagecolorallocate($image, 255, 255, 255);
	imagestring($image, 15, 5, 5, $code, $blanc);
	imagejpeg($image,NULL,75);
?>