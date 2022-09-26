<?php

$idContato = $_GET["campoIDCONTATO"];
$nome = $_GET["campoNome"];
$email = $_GET["campoEMAIL"];
$telefone = $_GET["campoTELEFONE"];
$idCidade = $_GET["campoIDCIDADE"];
$idTipoDeContato = $_GET["campoIDTIPODECONTATO"];

include("classeContato.php");

$contato = new classeContato();

$contato->setIdContato($idContato);
$contato->setNome($nome);
$contato->setEmail($email);
$contato->setTelefone($telefone);
$contato->setIdCidade($idCidade);
$contato->setIdTipoDeContato($idTipoDeContato);

if($contato->getIdContato() == 0){
        
        $contato->inserirContato();
        
        echo "<script>alert('contato $nome cadastrado');</script>";
        
        echo "<script>window.location.assign('contatos.php');</script>";
        
    }else{
        
        $contato->alterarContato();
        
        echo "<script>alert('contato $nome alterado');</script>";
        
        echo "<script>window.location.assign('contatos.php');</script>";
        
        
    }