<?php

class Usuario{

    //atributos da classe Usuário
    private $idususario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    //método acessor
    public function getIdusuario()
    {
        return $this->idususario;
    }

    //método modificador
    public function setIdusuario($id)
    {
        $this->idususario=$id;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($login)
    {
        $this->deslogin = $login;
    }
    
    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($senha)
    {
        $this->dessenha=$senha;
    }
    
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }
    public function setDtcadastro($data)
    {
        $this->dtcadastro=$data;
    }

    /**
     * Método responsavel por atribuir parametros a criação de um novo usuário
     *
     * @param string $login
     * @param string $password
     */
    public function __construct($login="", $password="")
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);
        $this->dtcadastro= new DateTime();
    }

    /**
     * Método de pesquisa de Cadastro por ID
     *
     * @param integer $id
     */
    public function loadById($id)
    {
        $sql= new SQL();

        $result=$sql->select("select * from tb_usuarios where idusuario = :id", array(
            ":id"=>$id
        ));

        if(count($result)>0)
        {
            $this->setData($result[0]);
        }
    }
    
    /**
     * Método que retorna uma lista com todos os Usuários
     *
     * @return string $result
     */
    public static function getList()
    {
        $sql = new SQL();
        $result=$sql->select("select * from tb_usuarios order by deslogin");
        return json_encode($result);
    }

    /**
     * Método de busca de Login por parametro
     *
     * @param string $login
     * @return string $result
     */
    public static function search(string $login)
    {
        $sql= new SQL();
        $result=$sql->select("Select * from tb_usuarios where deslogin LIKE :SEARCH",array(
            ':SEARCH'=>"%".$login."%"
        ));
        return json_encode($result);
    }

    /**
     * Método responsável por validar o usuário e a senha
     *
     * @param string $login
     * @param string $password
     * @return void
     */
    public function login(string $login,string $password)
    {
        $sql= new SQL();

        $result=$sql->select("select * from tb_usuarios where deslogin = :LOGIN and dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            "PASSWORD"=>$password
        ));

        if(count($result)>0)
        {
            $this->setData($result[0]);
        }
        else{
            throw new Exception("Login e ou Senha invalidos !");
        }

    }

    /**
     * Método responsavel por preencher os dados de retorno das buscas
     *
     * @param array $data
     * @return void
     */
    public function setData(array $data)
    {
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    /**
     * Método responsável por inserir um novo usuário no
     * banco e preencher os atributos id e data de cadastro do
     * objeto usuário
     * @return void
     */
    public function insert()
    {
        $sql= new SQL();
        $result=$sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN"=>$this->getDeslogin(),
            ":PASSWORD"=>$this->getDessenha()
        ));
        if(count($result)>0)
        {
            $this->setData($result[0]);
        }
    }

    /**
     * Método responsável por atualizar um registro no banco de dados
     *
     * @param string $login
     * @param string $password
     * @return void
     */
    public function update($login, $password)
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql= new SQL();
        $sql->que("Update tb_usuarios set deslogin = :LOGIN , dessenha= :PASSWORD where idusuario = :ID",array(
            ":LOGIN"=>$this->getDeslogin(),
            ":PASSWORD"=>$this->getDessenha(),
            ":ID"=>$this->getIdusuario()
        ));

    }

    /**
     * Método responsável por deletar um registro do banco de dados
     *
     * @return void
     */
    public function delete()
    {
        $sql = new SQL();
        $sql->que("Delete From tb_usuarios where idusuario= :ID",array(
            ":ID"=>$this->getIdusuario()
        ));

        echo $this;

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());

    }


    /**
     * Método chamado quando utilizado o Echo no objeto Usuario
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }

}