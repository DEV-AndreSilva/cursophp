<?php

//Função para executar os testes de erro
function trataNome($name)
{
    //Se o nome não for inserido corretamente lança uma execeção
    if(!$name)
    {
        throw new Exception("Nenhum nome foi informado",1);
    }

    echo ucfirst($name)."<br>";
}

//Tenta executar o bloco Try
try
{
    trataNome("Andre Luis");
    trataNome("");
}
catch(Exception $e) //Caso de erro executa o bloco Catch
{
    echo $e->getMessage()."<br>";
}
finally //Executa ao final o bloco opcional finally
{
    echo "Executou o Try, chamando o bloco finally";
}