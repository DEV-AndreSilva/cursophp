<?php

//Criando imagem a partir de imagem existente
$image = imagecreatefromjpeg("images".DIRECTORY_SEPARATOR."Certificado.jpg");

//Cor do titulo
$titleColor= imagecolorallocate($image,0,0,0);

//Cor do texto
$gray=imagecolorallocate($image,50,50,50);

//Escrevendo na Imagem, passadno fonte e posicionamento no eixos
imagefttext($image,32,0,320,250,$titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");
imagefttext($image,32,0,375,350,$titleColor,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf",utf8_decode("Sr. André Luis da Silva"));
imagefttext($image,15,0,500,375,$gray,"fonts".DIRECTORY_SEPARATOR."Patrick".DIRECTORY_SEPARATOR."PatrickHand-Regular.ttf",utf8_decode("Concluído em:".date("d/m/Y")));


header("Content-Type: image/jpeg");

//Criando novo arquivo com a imagem alterada
imagejpeg($image,"images".DIRECTORY_SEPARATOR."certificado-".date("Y-m-d").".jpg");

imagedestroy($image);