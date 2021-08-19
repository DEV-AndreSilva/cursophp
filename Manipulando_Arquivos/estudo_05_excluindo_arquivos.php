<?php

//Cria a pasta teste se ela não existir
if(!is_dir("Teste"))
{
    //Cria o diretório Teste
    mkdir("Teste");

    //Cria arquivos a serem excluidos
    $file1=fopen("Teste\\arquivo01.txt","w+");
    fclose($file1);

    $file2=fopen("Teste\\arquivo02.txt","w+");
    fclose($file2);

    $file3=fopen("Teste\\arquivo03.txt","w+");
    fclose($file3);

    echo "Diretório e arquivos de Teste foram criados";
}

//Se o diretório existir apaga os arquivos
else
{
    //Percorre o diretório Teste e apaga os arquivos
    foreach(scandir("Teste") as $item)
    {
        if(!in_array($item, array(".","..")))
        {
            //Comando para apagar arquivos
            unlink("Teste/".$item);
        }
    }

    //Apagando diretorio Teste
    rmdir("Teste");
    echo "Diretório e arquivos de Teste foram apagados";
}




