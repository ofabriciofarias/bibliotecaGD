<?php
//Utilizar o GD com imagens de fundo já existentes

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);

//Repetindo o mesmo número em três é um tom de cinza
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 150, $titleColor, "fonts" . DIRECTORY_SEPARATOR . 
	"Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");


imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts" . DIRECTORY_SEPARATOR . 
	"Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Fabricio Farias");

imagettftext($image, 32, 0, 250, 590, $titleColor, "fonts" . DIRECTORY_SEPARATOR . 
	"Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Concluído em " . date("d/m/Y"));

header("Content-type: image/jpeg");

//imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 90);
imagejpeg($image);

imagedestroy($image);


?>