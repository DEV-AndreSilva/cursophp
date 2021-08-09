<?php


spl_autoload_register(function($nameClass)
{
    $dirClass="..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."Classes_PHP";
    $fileName= $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";

    if(file_exists($fileName))
    {
        echo "$fileName<br>";
        require_once "$fileName";
    }
}
);

