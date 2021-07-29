<?php
/* polimorfismo, são metódos de classes 
filhas com métodos da classe pai, 
mas com comportamentos diferente */


//Classe abstrata Animal
abstract class Animal{
    public function falar()
    {
        return "<br>Som";
    }

    public function mover()
    {
        return "<br>Andou";
    }
}

//Classe filho modificando comportamento do método da classe pai
class Gato extends Animal{
    public function falar()
    {
        return "<br>Miau";
    }

}

//Classe filho modificando comportamento do método da classe pai
class Cachorro extends Animal{
    public function falar()
    {
        return"<br> Au Au";
    }
}

//Classe filho modificando comportamento do método da classe pai
//Classe filho utilizando método da classe pai de forma estática
class Passaro extends Animal{
    public function falar()
    {
        return"<br> Piu Piu";
    }

    public function mover()
    {
        //parent = serve para acessar os métodos da classe pai
        return "Voou e ".parent::mover();
    }
}
//Intanciando Gato
$tom= new Gato();
echo ($tom->falar());
echo ($tom->mover());

//Instanciando Cachorro
$pluto= new Cachorro();
echo ($pluto->falar());
echo ($pluto->mover());

//Instanciando Passaro
$piupiu= new Passaro();
echo($piupiu->falar());
echo($piupiu->mover())

?>