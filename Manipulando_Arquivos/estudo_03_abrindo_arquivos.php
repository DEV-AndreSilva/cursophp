<?php

//abrir um arquivo
$file = fopen("log.txt","a+");

//escrever em um arquivo
fwrite($file,date("Y-m-d H:i:s")."\r\n");

//fechando o arquivo criado
fclose($file);

echo "Arquivo Criado com sucesso";