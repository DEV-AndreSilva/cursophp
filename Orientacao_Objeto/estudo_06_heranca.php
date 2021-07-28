<?php

//Classe primária possui atributos  e métodos genericos
//A classe que herda a classe primária(estendida) possui metódos e atributos especificos


/* Abstração -> o quão genérico eu consigo contruir uma classe para que ela 
possa ser usado em diversos lugares
*/

//Classe pai, Genérica
class Documento{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($valor)
    {
        $this->numero=$valor;
    }
}

//Classe filho, especifico
class CPF extends Documento{

    public function validar():bool
    {
        $numeroCPF=$this->getNumero();
        //validação de um CPF
        //...
        return true;
    }
}

//instanciando documento da classe CPF
$doc = new CPF();

//Inserindo um valor no atributo
$doc->setNumero(12346);

//Verificando se o CPF é valido
var_dump($doc->validar());


?>
