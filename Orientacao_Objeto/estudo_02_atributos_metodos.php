<?php

//criando classe
class Carro
{
    private $motor;
    private $modelo;
    private $ano;

    
    //Método acessor Motor
    public function getMotor():float
    {
        return $this->motor;
    }

    //Método mutator Motor
    public function setMotor($motor)
    {
        $this->motor=$motor;
    }

    //Método acessor Modelo
    public function getModelo():string
    {
        return $this->modelo;
    }

    //Método mutator Modelo
    public function setModelo($modelo)
    {
        $this->modelo=$modelo;
    }

    
    //Método acessor Ano
    public function getAno():int
    {
        return $this->ano;
    }

    //Método mutator Ano
    public function setAno($ano)
    {
        $this->ano=$ano;
    }

    //Função de exibição de valores
    public function exibe()
    {
        return array(
            'modelo'=>$this->getModelo(),
            'motor'=>$this->getMotor(),
            'ano'=>$this->getAno()
        );
    }
}

//Instanciando objeto da classe Carro
$meuCarro = new Carro();


//Erro, não é possivel acessar diretamente atributos privados
//( Cannot access private property Carro)
//$meuCarro->modelo='Carros';

//Preenchendo atributos
$meuCarro->setModelo('Uno');
$meuCarro->setMotor('1.7');
$meuCarro->setAno('2015');


//exibindo as informações do array retornado
var_dump($meuCarro->exibe());

?>