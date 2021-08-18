<?php

$suaIdade=72;

$idadeCrianca=12;
$idadeMaior=18;
$idadeMelhor=65;

// se condição for verdadeira execute  a instrução do bloco
if($suaIdade< $idadeCrianca)
{
    echo "Criança";
}
//se não se
else if($suaIdade <$idadeMaior)
{
    echo "Adolescente";
}

else if($suaIdade <$idadeMelhor)
{
    echo 'Adulto';
}

//se não
else{
    echo "Idoso";
}

echo"<br>";

//Operador Ternário 
//(condição) ? "se verdadeiro" : "se falso"
echo ($suaIdade < $idadeMaior)?"Menor de Idade":"Maior de idade";
echo"<br>";

//Switch case
$diaSemana=date("w");


//Comparação de valores pontuais
switch($diaSemana)
{
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo"data invalida";
        break;
}
