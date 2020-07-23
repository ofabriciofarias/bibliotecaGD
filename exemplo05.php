<?php
//Utilizar o GD com imagens de fundo já existentes

$image = imagecreatefromjpeg("certificado.jpg");

$autor = "Fulano de Tal da Silva Organico";
$evento = "Primeiro Congresso de Computação e Comnhecimentos da BitEdu";
$dataEvento = "20 até 22 de janeiro de 2009.";
// Text to be placed as a paragraph
$text = "Declaro para os devidos fins e a quem interessar que $autor participou do $evento que foi realizado no em $dataEvento";

// Break it up into pieces 125 characters long
$lines = explode('|', wordwrap($text, 68, '|'));

// Starting Y position
$y = 220;

$titleColor = imagecolorallocate($image, 0, 0, 0);

//Repetindo o mesmo número em três é um tom de cinza
$gray = imagecolorallocate($image, 100, 100, 100);

	
imagettftext($image, 32, 0, 320, 150, $titleColor, "fonts" . DIRECTORY_SEPARATOR
	. "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");
		

foreach ($lines as $line)
	{
		imagettftext($image, 22, 0, 100, $y, $titleColor, "fonts" . DIRECTORY_SEPARATOR
		 . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", $line);

		$y += 32;

	}

imagettftext($image, 32, 0, 250, 590, $titleColor, "fonts" . DIRECTORY_SEPARATOR . 
	"Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Concluído em " . date("d/m/Y"));

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);


?>
