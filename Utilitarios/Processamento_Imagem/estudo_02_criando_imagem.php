<?php

//Criando imagem a partir de imagem existente
$image = imagecreatefromjpeg("images".DIRECTORY_SEPARATOR."Certificado.jpg");

//Cor do titulo
$titleColor= imagecolorallocate($image,0,0,0);

//Cor do texto
$gray=imagecolorallocate($image,100,100,100);

//Escrevendo na Imagem
imagestring($image,5,450,150,"CERTIFICADO",$titleColor);
imagestring($image,5,440,350, utf8_decode("André Luis da Silva"), $gray);
imagestring($image,3,440,370,utf8_decode("Concluído em:".date("d/m/Y")),$gray);

header("Content-Type: image/jpeg");

//Criando novo arquivo com a imagem alterada
imagejpeg($image,"images".DIRECTORY_SEPARATOR."certificado-".date("Y-m-d").".jpg");

imagedestroy($image);