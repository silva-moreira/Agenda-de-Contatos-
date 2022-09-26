<?php

$idCidade = $_GET["idCidade"];
include("classeCidade.php");
$cidade = new classeCidade();
$cidade->setIdCidade($idCidade);
$resultado = $cidade->excluirCidade();
echo "<script>alert('Cidade deletada'); </script>";
echo "<script>window.location.assign('cidades.php'); </script>";

?>