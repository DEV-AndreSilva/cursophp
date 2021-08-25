<?php

//Criando o nome para dar a pasta
$pasta = "Arquivos";

/*Definindo o tipo de permissão, onde cada digito representa
um usuário e os valores de 0 a 7 o tipo de permissão daquele usuário*/
$permissao="0775";

//Se o diretório ainda não existir, crio ele
if(!is_dir($pasta))
{
    //Criando diretório com valores de permissão de pasta
    mkdir($pasta,$permissao);
    //Modificando esses valores de permissão de pasta
    chmod($pasta,0000);

    echo "Diretório criado com sucesso";
}

//Vendo as permissoes do arquivo
echo substr(sprintf("%o",fileperms($pasta)),-4);
