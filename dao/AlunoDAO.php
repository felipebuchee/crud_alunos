<?php 

require_once(__DIR__ . "/../util/Connection.php");

class AlunoDAO{

    private PDO $conexao;

    public function __construct(){
        $this->conexao = Connection::getConnection();
    }
    
    public function listar(){
        $sql = "SELECT * FROM alunos";
        $stm = $this->conexao->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        return $result;
    }
}