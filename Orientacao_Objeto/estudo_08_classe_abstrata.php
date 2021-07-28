<?php
/* Diferença entre classe abstrata e interface
   Na classe abstrata não apenas definimos o que
   os métodos preciam ter, mas o que eles fazem também  */

 //Uma classe abstrata nunca é istanciada, é estendida por uma classe comum
 //Uma classe comum só pode estender uma classe abstrata

//Criando uma interface
interface Veiculo
{
    public function acelerar($velocidade):string;
    public function frenar($velocidade):string;
    public function trocarMarcha($marcha):string;
}

//Criando uma classe abstrata que implementa a interface Veiculo
//É necessário escrever todos os métodos da interface implementada
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

//Criando uma classe que estende uma classe abstrata
class Camaro extends Automovel{
    
    //Método unico da classe Camaro
    public function correr()
    {
        return "<br>O Camaro correu";
    }

    //Posso manter a estrutura do método mas mudar seu comportamento
    public function trocarMarcha($marcha):string
    {
        return "<br>Troquei de marcha: $marcha";
    }
}

//Instanciando objeto da classe Camaro
$obCamaro= new Camaro();

//Vau ser executado o método estendido da classe Automovel
echo ($obCamaro->acelerar('50 Km/h'));

//Vai ser executado o método alterado da classe camaro
echo ($obCamaro->trocarMarcha(2));
?>