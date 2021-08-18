<?php
    $condicao=true;

    //enquanto a condição for verdadeira repita
    while($condicao)
    {
        $numero=rand(1,100);
        echo " ".$numero;
        if($numero==100)
        {
            echo "<br> numero 100";
            $condicao=false;
        }
    }

    //executa ao menos uma vez
    do{
        echo "a condição é falsa";

    }while($condicao);
?>