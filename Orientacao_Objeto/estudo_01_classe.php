<?php

//Criando classe Pessoa
class Pessoa{

    //Atributos de uma Pessoa
    public $nome;

    //Método
    public function falar()
    {
        //$this é a representação do objeto que eu estou usando naquele momento
        return "Meu nome é ".$this->nome;
    }

 
}
//Instanciando um objeto da classe Pessoa
$andre= new Pessoa();

//Acessando um atributo público da classe Pessoa 
$andre->nome="André Luis";

//Acessando um método público da classe Pessoa
echo $andre->falar();