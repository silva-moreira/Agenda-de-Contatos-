<?php

class classeCidade{
    
    private $idCidade;
    private $nome;
    
    function getIdCidade() {
        return $this->idCidade;
    }

    function getNome() {
        return $this->nome;
    }

    function setIdCidade($idCidade) {
        $this->idCidade = $idCidade;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function inserirCidade(){
        include("conexao.php");
        $comando = "INSERT INTO cidade (NOME) VALUES (?);";
        $resposta = $PDO->prepare($comando);
        
        $resposta->bindValue(1, $this->nome);
        $resposta->execute();
        
        foreach ($resposta as $registro){
            
            $this->idCidade = utf8_encode($registro["IdGerado"]);
        }
        
      
    }
    
    function consultarCidade(){
        include("conexao.php");
        
        $comando = "SELECT * FROM cidade WHERE IDCIDADE=?;";
        $resposta = $PDO->prepare($comando);
        
        $resposta->bindValue(1, $this->idCidade);
        $resposta->execute();
    }
    
    function alterarCidade()
    {
       include("conexao.php");
       $comando = "UPDATE cidade SET "
               .  "NOME=?"     
               .  "WHERE IDCIDADE=?;";
               
       $resposta = $PDO->prepare($comando);
       
       $resposta->bindValue(1, $this->nome);
       $resposta->bindValue(2, $this->idCidade);
  
       $resposta->execute();
    }

    function excluirCidade()
    {
        include("conexao.php");
        
        $comando = "DELETE FROM cidade WHERE (IDCIDADE=?);";
        $resposta = $PDO->prepare($comando);
        
        $resposta->bindValue(1, $this->idCidade);
        $resposta->execute();
    }
}

