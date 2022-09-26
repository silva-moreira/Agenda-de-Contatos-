<?php

    $idTipoDeContato = $_GET["campoIDTIPODECONTATO"];
    $nome = $_GET["campoNome"];
    
    include ("classeTipodecontato.php");
    
    $tipodecontato = new classeTipodecontato();
    
    $tipodecontato->setIdTipodecontato($idTipoDeContato);
    $tipodecontato->setNome($nome);
    
    if($tipodecontato->getIdTipodecontato()==0){
        
        $tipodecontato->inserirTipodecontato();
        
        echo "<script>alert('Tipo de Contato $nome cadastrado'); </script>";
        
        echo "<script>window.location.assign('TiposdeContatos.php'); </script>";
        
    }else{
        
            $tipodecontato->alterarTipodecontato();
                     
        echo "<script>alert('Tipo de Contato $nome alterado'); </script>";
        
        echo "<script>window.location.assign('TiposdeContatos.php'); </script>";
        
    }
