<?php

$filename="usuarios.csv";

//Verifica se o arquivo existe
if(file_exists($filename))
{
    //Abre o arquivo para a leitura
    $file=fopen($filename,"r");

    //Pega  a 1ª linha do arquivo
    $headers = explode(",",fgets($file));

    $usuarios=array();
    //Enquanto retornar uma linha executa o laço de repetição
    while($row = fgets($file))
    {
        //Array que guardará os dados do usuário
        $userData = array();

        //Valores de uma linha
        $valores=explode(",",$row);

        //Quantidade de colunas
        $count=count($valores);

        //Repetição para preencher os dados do usuário
        for($i=0;$i<$count;$i++)
        {
            $userData[$headers[$i]]=$valores[$i];
        }
        array_push($usuarios,$userData);
    }

    echo json_encode($usuarios);

}
