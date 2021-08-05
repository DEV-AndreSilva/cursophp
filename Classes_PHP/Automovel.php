<?php

interface Veiculo
{
    public function acelerar($velocidade):string;
    public function frenar($velocidade):string;
    public function trocarMarcha($marcha):string;
}

abstract class Automovel implements Veiculo
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

    //Método escrito pela classe abstrata
    public function ligarLanterna()
    {
        return "Ligou a lanterna";
    }
}

?>