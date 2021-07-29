<?php

//Função para incluir classes 
function incluirClasses($classe)
{
    if(file_exists($classe.".php"))
    {
        require_once($classe.".php");
    }
}

//Chamada automática das classes do local onde está o arquivo autoload
spl_autoload_register("incluirClasses");

//Chamada automática das classes da pasta 'Classes' do projeto
spl_autoload_register(function($classe){
    if(file_exists("..".DIRECTORY_SEPARATOR."Classes".DIRECTORY_SEPARATOR.$classe.".php"))
    {
        var_dump($classe);
        require_once("..".DIRECTORY_SEPARATOR."Classes".DIRECTORY_SEPARATOR.$classe.".php");       
    }
});



$obCarro = new Camaro();
echo($obCarro->acelerar('15kh'));

?>