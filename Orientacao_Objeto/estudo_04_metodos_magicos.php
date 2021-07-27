<?php
//Coisas que acontecem fora de sua vista

class Endereco
{
    private $logradouro;
    private $numero;
    private $cidade;

    //Método construtor (método executado no momento da criação do objeto)
    public function __construct($logradouro,$numero,$cidade)
    {
        $this->logradouro=$logradouro;
        $this->numero=$numero;
        $this->cidade=$cidade;
    }

    //Método Destruct (Chamado quando o objeto é excluido da memória)
    public function __destruct()
    {
        var_dump("Destruir");
    }

    //Serialização de um objeto, recebimento dele e converter em String
    //Toda vez que dar um echo nesse objeto vai acontecer isso
    public function __toString()
    {
        return "<br>".$this->logradouro.", ".$this->numero.", ".$this->cidade."<br>";
    }
}

$meuEndereco= new Endereco('Rua das Gaivotas', '245','São Paulo');

var_dump($meuEndereco);
echo $meuEndereco;
unset($meuEndereco);





?>