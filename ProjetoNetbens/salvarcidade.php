<?php

    $idCidade=$_GET["campoIDCIDADE"];
    $nome=$_GET["campoNome"];
    
    include("classeCidade.php");
    
    $cidade = new classeCidade();
    
    $cidade->setIdCidade($idCidade);
    $cidade->setNome($nome);
    
    if($cidade->getIdCidade()==0){
        
        $cidade->inserirCidade();
        
        echo "<script>alert('cidade $nome cadastrada');</script>";
        
        echo "<script>window.location.assign('cidades.php');</script>";
        
    }else{
        
        $cidade->alterarCidade();
        
        echo "<script>alert('cidade $nome alterada');</script>";
        
        echo "<script>window.location.assign('cidades.php');</script>";
        
        
    }
    
