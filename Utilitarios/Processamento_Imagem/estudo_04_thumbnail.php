<?php
header("Content-Type: image.jpeg");

$file = "images".DIRECTORY_SEPARATOR."wallpaper.jpg";

$new_width=256;
$new_height=256;

//Recebendo as dimensões do arquivo original
list($old_width,$old_height)=getimagesize($file);

//Carrega a paleta de cores do sistema
$new_image= imagecreatetruecolor($new_width,$new_height);
$old_image = imagecreatefromjpeg($file);

//Imagem nova
//Imagem antiga
//Ponto de origem do corte x na imagem destino
//Ponto de origem do corte y na imagem destino
//Ponto de origem do corte x na imagem origem
//Ponto de origem do corte y na imagem origem 
//Largura da imagem de destino
//Altura da imagem de destino
//Largura da imagem de origem
//Altura da imagem de origem
imagecopyresampled($new_image,$old_image,0,0,0,0,$new_width,$new_height,$old_width,$old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);
