<?php

//Link de acesso da imagem
$link ="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Google_Images_2015_logo.svg/1200px-Google_Images_2015_logo.svg.png";

//Recebendo o conteudo da imagem
$content = file_get_contents($link);

//Retorna uma matriz associativa com os componentes da imagem
$parse = parse_url($link);

//Recebendo nome base do arquivo
$basename=(basename($parse["path"]));

//Nome do diretório e caminho onde serão salvo os arquivos
$dir="downloads";
$path=$dir."\\".$basename;

//Cria o diretório local se ele não existir
if(!is_dir($dir))
{
    mkdir($dir);
}

//Cria o arquivo se ele não existir no local indicado por path e abre ele para escrita
$file= fopen($path,"w+");

//Escreve a imagem no arquivo
fwrite($file, $content);

//Fecha o arquivo
fclose($file);
?>

<img src="<?=$path?>">
