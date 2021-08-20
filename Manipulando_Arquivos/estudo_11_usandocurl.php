<?php
//Biblioteca Curl, foi criada para fazer a comunicação entre aplicações 

$cep="01001000";

//A url que vai te retornar o arquivo json
$link="https://viacep.com.br/ws/$cep/json/";

//Iniciado o Curl
$ch= curl_init($link);

//Ativando opção de retorno
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//Desabilitando a verificação de ssl
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

//Executando a consulta e retornando o valor
$response= curl_exec($ch);

//Finalizando o Curl
curl_close($ch);

//Convertendo o arquivo para um array
$data=json_decode($response,true);

//Exibindo o array
print_r($data);

