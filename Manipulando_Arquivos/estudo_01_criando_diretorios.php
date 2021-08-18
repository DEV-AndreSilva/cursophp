<?php

$name = "images";

//Verifica se a string passada é um diretório is_dir
if(!is_dir($name))
{
    //Cria um diretório cria um
    mkdir($name);
    echo "Foi criado o diretório: ".$name;
}
else
{
    //Apaga um diretório existente
    rmdir($name);
    echo "O diretório: ".$name." foi excluido";
}