<?php
//Inclui arquivo de configuração e autoload das classes
require_once ("config.php");

//Instancia usuário
$users= new Usuario();

//Recebe um arquivo json com todos os usuários
$users = $users->getList();

//Transforma o arquivo recebido em um array
$arrayUsers=json_decode($users,true);

//Array para o cabeçalho do arquivo csv
$headers= array();

//Preenche  o array com os valores para cabeçalho
foreach ($arrayUsers[0] as $key => $value)
{
    array_push($headers,ucfirst($key));
}

//Abre o arquivo csv ou cria um novo se ele ja existir
$file= fopen("usuarios.csv","w+");

//Escreve o cabeçalho nesse arquivo csv
fwrite($file,implode(",",$headers)."\r\n");


//Percorre todos os usuários do sistema
foreach ($arrayUsers as $user)
{
    //Array de dados dos usuários do sistema
    $data= array();

    //Percorre os dados de um usuário do sistema
    foreach($user as $key=>$valor)
    {
        array_push($data,$valor);
    }

    //Escreve no arquivo csv os dados de 1 usuário
    fwrite($file, implode(",",$data)."\r\n");
}

//Fecha o arquivo CSV
fclose($file);



