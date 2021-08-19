<?php

//caminho do arquivo
$filename="images\\php7.png";

//codificando o arquivo de imagem em base64
$base64=base64_encode(file_get_contents($filename));

//intanciando objeto finfo
$fileInfo= new finfo(FILEINFO_MIME_TYPE);

//rebendo a extensão do arquivo mimetype
$mimetype=$fileInfo->file($filename);

//criando codificação do arquivo
$base64encode = "data:".$mimetype.";base64,".$base64;
?>
<a href="<?=$base64encode?>" target="_blank"> Link para acessar a imagem</a>
<br><br>
<img src="<?=$base64encode?>">