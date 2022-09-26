<?php

$servidorMysql = "localhost";
$usurarioMysql = "root";
$senhaMysql = "";
$bancoMysql = "contato";

try{
    
    $PDO = new PDO ("mysql:host=$servidorMysql;dbname=$bancoMysql", $usurarioMysql,$senhaMysql);
    
} catch (PDOException $ErrodeExcessaoPDO) {

    //Menssagem de Erro
    echo "<script>alert('Erro ao conectar com o banco de dados');</script>";
    
    //Redirecionamento via Javascript para a pagina Index.php
    echo "<script>window.location.assing('index.php');</script>";
}