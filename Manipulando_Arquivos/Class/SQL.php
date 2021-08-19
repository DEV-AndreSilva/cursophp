<?php

class SQL extends PDO{

    /**
     * Variavel conexao
     * @var PDO
     */
    private $conn;

    /**
     * Método construtor
     */
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");
    }


    /**
     * Método responsavel por passar os parametros
     * @param mixed $statment
     * @param array $parameters
     * @return void
     */
    private function setParams($statement, $parameters= array())
    {
        foreach($parameters as $key =>$value)
        {
            //var_dump($statment);
            $this->setParam($statement,$key, $value);
        }
    }

    /**
     * Método responsavél por passar 1 dos parametros
     * @param mixed $statment
     * @param mixed $key
     * @param mixed $value
     * @return void
     */
    public function setParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    /**
     * Método responsavel por preparar a query e executar
     * @param string $rawQuery
     * @param array $params
     */
    public function que($rawQuery, $params = array())
    {
        $stmt=$this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);
      
        $stmt->execute();

        return $stmt;
    }

    /**
     * Método responsavel por realizar buscas
     * @param string $rawQuery
     * @param array $params
     * @return array
     */
    public function select($rawQuery,$params = array())
    {
       $stmt = $this->que($rawQuery,$params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}