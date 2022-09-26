<?php

class classeTipodecontato {

    private $idTipoDecontato;
    private $nome;

    function getIdTipodecontato() {
        return $this->idTipoDecontato;
    }

    function getNome() {
        return $this->nome;
    }

    function setIdTipodecontato($idTipoDecontato) {
        $this->idTipoDecontato = $idTipoDecontato;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

   
    function inserirTipodecontato() {
        include("conexao.php");
        $comando = "INSERT INTO tipodecontato (NOME) VALUES (?);";
        $resposta = $PDO->prepare($comando);

        $resposta->bindValue(1, $this->nome);
        $resposta->execute();

        foreach ($resposta as $registro) {

            $this->idCidade = utf8_encode($registro["IdGerado"]);
        }
    }

    function alterarTipodecontato() {
        include("conexao.php");
        $comando = "UPDATE tipodecontato SET "
                .  "NOME=?"
                .  "WHERE IDTIPODECONTATO=?;";

        $resposta = $PDO->prepare($comando);

        $resposta->bindValue(1, $this->nome);
        $resposta->bindValue(2, $this->idTipoDecontato);

        $resposta->execute();
    }
    
        function consultarTipodeContato() {
            include("conexao.php");

            $comando = "SELECT * FROM tipodecontato WHERE IDTIPODECONTATO=?;";
            $resposta = $PDO->prepare($comando);

            $resposta->bindValue(1, $this->idTipoDecontato);
            $resposta->execute();

            foreach ($resposta as $registro) {

                $this->nome = utf8_encode($registro["NOME"]);
            }
        }

        function excluirTipoDeContato(){
        include("conexao.php");
        
        $comando = "DELETE FROM tipodecontato WHERE (IDTIPODECONTATO=?);";
        $resposta = $PDO->prepare($comando);
        
        $resposta->bindValue(1, $this->idTipoDecontato);
        $resposta->execute();
        
     
    }
}
    