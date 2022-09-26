<?php

$idTipoDeContato = $_GET["idTipodecontato"];
include("classeTipodecontato.php");
$tipodecontato = new classeTipodecontato();
$tipodecontato->setIdTipoDeContato($idTipoDeContato);
$resultado = $tipodecontato->excluirtipodecontato();
echo "<script>alert('Tipo de Contato deletado'); </script>";
echo "<script>window.location.assign('TiposdeContatos.php');</script>";
