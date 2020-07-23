<?php

$image = imagecreatefromjpeg("certificado.jpg");

// Basic font settings
$font = "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf";//"./times.ttf";
$font_size = 15;
$font_color =  0x000000;

// Text to be placed as a paragraph
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non nunc lectus. Curabitur hendrerit bibendum enim dignissim tempus. Suspendisse non ipsum auctor metus consectetur eleifend. Fusce cursus ullamcorper sem nec ultricies. Aliquam erat volutpat. Vivamus massa justo, pharetra et sodales quis, rhoncus in ligula. Integer dolor velit, ultrices in iaculis nec, viverra ut nunc.";

// Break it up into pieces 125 characters long
$lines = explode('|', wordwrap($text, 115, '|'));

// Starting Y position
$y = 513;

// Loop through the lines and place them on the image
foreach ($lines as $line)
{
    imagettftext($image, $font_size, 0, 50, $y, $font_color, $font, $line);

    // Increment Y so the next line is below the previous line
    $y += 23;
}

//echo "Worked";

header("Content-type: image/jpeg");

//imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 90);
imagejpeg($image);

imagedestroy($image);
?>