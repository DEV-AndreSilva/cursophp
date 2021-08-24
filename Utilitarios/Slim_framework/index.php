<?php

require "vendor/autoload.php";

$app = new \Slim\Slim();

//Configuração das rotas, rota GET
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

//Configuração das rotas, rota GET
$app->get('/', function () {
    echo json_encode(array(
        "date"=>date("Y-m-d")
    ));
});

$app->run();