<?php
//Interface serve para organizar seu código
//Serve para o código se comunicar com terceiros

//Quem usa(implementa) a interface precisa seguir as regras que ela definiu
//Nomes, parametros, modificadores de acesso de Métodos
//Interface funciona como um contrato

//No PHP uma classe pode implementar mais de uma interface

//Criando uma interface
interface Veiculo
{
    public function acelerar($velocidade):string;
    public function frenar($velocidade):string;
    public function trocarMarcha($marcha):string;
}

//Criando outra interface
interface Aquatico{
    public function mergulhar($profundidade):bool;
}


//Criando uma classe que implementa Veiculo
//É necessário escrever todos os métodos da interface implementada
class carro implements Veiculo
{
    public function acelerar($velocidade):string
    {
       return "Acelerou: ".$velocidade;
    }

    public function frenar($velocidade):string
    {
        return "Freiou: ".$velocidade;
    }

    public function trocarMarcha($marcha):string
    {
        return  "Trocou para marcha: ".$marcha;
    }
}

//Criando uma classe que implementa várias interfaces
//É necessário implementar todos os métodos das interfaces implementadas
class submarino implements Veiculo,Aquatico
{
    public function acelerar($velocidade):string
    {
       return "Acelerou: ".$velocidade;
    }

    public function frenar($velocidade):string
    {
        return "Freiou: ".$velocidade;
    }

    public function trocarMarcha($marcha):string
    {
        return  "Trocou para marcha: ".$marcha;
    }

    public function mergulhar($profundidade): bool
    {
        echo "<br> Mergulhou a $profundidade metros de profundidade<br>";
        return true;
    }
}

//criando um Carro
$camaro= new carro();
echo($camaro->acelerar("70 Km/h"));

//Criando um Submarino
$sub= new submarino();
var_dump($sub->mergulhar(15));
?>