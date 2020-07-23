<?php
//Criar certificados e tratar imagens para adicionar textos

header("Content-Type: image/png");

$image = imagecreate(256, 256);

//Primeira cor criada será a de fundo
$black = imagecolorallocate($image, 0, 0, 0);

//Vermelho
$red = imagecolorallocate($image, 255, 0, 0);

//Escrever na tela usando a imagestring
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

imagepng($image);

imagedestroy($image);

?>