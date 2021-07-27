<?php
    //Encapsular é proteger, controlar quem pode ver
    //Modificar acesso

use Pessoa as GlobalPessoa;

class Pessoa
    {
        //Público = Todos podem ver
        public $nome = "Rasmus Lerdorf";

        //Protegido = Apenas é visto na mesma classe e na classe estendida
        protected $idade = 35;

        //Privado = Apenas é visto na mesma classe
        private $senha=654321;

        public function verDados()
        {
            echo "<br>";
            echo $this->nome."<br>";
            echo $this->idade."<br>";
            echo $this->senha."<br>";
        }
    }

    class Programador extends GlobalPessoa
    {
        public function verDados()
        {
            //ver a classe que está chamando esse método
            echo get_class($this)."<br>";
            echo "<br>";
            echo $this->nome."<br>";
            echo $this->idade."<br>";
            echo $this->senha."<br>";
        }
    }

    //Instanciando objeto da classe Pessoa
    $obPessoa= new GlobalPessoa;
    $obProgramador= new Programador;
    
    //Acessando diretamente fora da classe atributo público (Permitido)
    echo $obPessoa->nome;

    //Acessando diretamente fora da classe atributo protegido (Não Permitido)
    // erro: Cannot access protected property
    //echo $obPessoa->idade;

    //Acessando diretamente fora da classe atributo privado (Não Permitido)
    // erro: Cannot access protected property
    //echo $obPessoa->idade;

    //É permitido acessar de dentro da classe Métodos publicos/privados/protegidos dessa classe
    $obPessoa->verDados();

    //A classe herdeira consegue ver o que é publico e protegido da classe que herdou
    $obProgramador->verDados();

?>