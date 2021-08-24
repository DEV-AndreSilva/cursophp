<?php

//Cabeçalho de tipo de imagem
header("Content-Type: image/png");

//Criando o espaço da imagem
$image=imagecreate(256,256);

//Criando as cores sendo a 1ª a cor de fundo
$black=imagecolorallocate($image,0,0,0);
$red=imagecolorallocate($image,200,0,0);

//Escrevendo um texto na imagem
imagestring($image,3,60,120,"Curso de PHP",$red);

//Renderizando a imagem
imagepng($image);
imagedestroy($image);