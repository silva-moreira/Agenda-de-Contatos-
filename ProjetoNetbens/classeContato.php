<?php

class classeContato {

    private $idContato;
    private $nome;
    private $email;
    private $telefone;
    private $idCidade;
    private $idTipoDeContato;


    function getIdContato() {
        return $this->idContato;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getIdCidade() {
        return $this->idCidade;
    }

    function getIdTipoDeContato() {
        return $this->idTipoDeContato;
    }

    function setIdContato($idContato) {
        $this->idContato = $idContato;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setIdCidade($idCidade) {
        $this->idCidade = $idCidade;
    }

    function setIdTipoDeContato($idTipoDeContato) {
        $this->idTipoDeContato = $idTipoDeContato;
    }



    //metodos CRUD

    function inserirContato() {

        include("conexao.php");
        $comando = "INSERT INTO  contato (NOME,EMAIL,TELEFONE,IDCIDADE,IDTIPODECONTATO) VALUES(?,?,?,?,?);";
        $resposta = $PDO->prepare($comando);

        $resposta->bindValue(1, $this->nome);
        $resposta->bindValue(2, $this->email);
        $resposta->bindValue(3, $this->telefone);
        $resposta->bindValue(4, $this->idCidade);
        $resposta->bindValue(5, $this->idTipoDeContato);
        $resposta->execute();
        
        foreach ($resposta as $registro){

            $this->idcontato = utf8_encode($registro["Idgerado"]);
        }
   }

  
   
   function consultaContato(){
       include("conexao.php");
       
       $comando = "SELECT * FROM contato WHERE IDCONTATO=?;";
       $resposta = $PDO->prepare($comando);
       $resposta->bindValue(1, $this->idContato);
       $resposta->execute();
       
       foreach ($resposta as $registro){
           $this->idContato       = utf8_encode($registro["IDCONTATO"]);
           $this->nome            = utf8_encode($registro["NOME"]);
           $this->email           = utf8_encode($registro["EMAIL"]);  
           $this->telefone        = utf8_encode($registro["TELEFONE"]);
           $this->idCidade        = utf8_encode($registro["IDCIDADE"]);
           $this->idTipoDeContato = utf8_encode($registro["IDTIPODECONTATO"]);
                   
       }
   }
   
   function alterarContato(){

       include("conexao.php");

       $comando = "UPDATE contato SET "
                .  "NOME=?,"
                .  "EMAIL=?,"
                .  "TELEFONE=?,"
                .  "IDCIDADE=?,"
                .  "IDTIPODECONTATO=? "
                .  "WHERE (IDCONTATO=?);";
               
       $resposta = $PDO->prepare($comando);
       
       $resposta->bindValue(1, $this->nome);
       $resposta->bindValue(2, $this->email);
       $resposta->bindValue(3, $this->telefone);
       $resposta->bindValue(4, $this->idCidade);
       $resposta->bindValue(5, $this->idTipoDeContato);
       $resposta->bindValue(6, $this->idContato);
       $resposta->execute();
       
   }
   
   function excluirContato(){
       include("conexao.php");
       
       $comando = "DELETE FROM contato WHERE (IDCONTATO=?);";
       $resposta = $PDO->prepare($comando);
       $resposta->bindValue(1, $this->idContato);
       $resposta->execute();
       
       
   }
}
