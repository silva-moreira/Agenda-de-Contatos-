<?php

    $idContato = $_GET["idContato"];
    include ("classeContato.php");
    $contato = new classeContato();
    $contato->setIdContato($idContato);
    $contato->setNome("");
    $contato->setEmail("");
    $contato->setTelefone("");
    $contato->setIdCidade(0);
    $contato->setIdTipoDeContato(0);
    if($contato->getIdContato()!= 0){
        
        $contato->consultaContato();
        
    }

?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/contato.css">
        
        <title>Agenda de Contatos</title>
    </head>
    <body>

        <!-- Inicio DIV container-->

        <div class="container">

            <!-- Inicio navbar-->

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                 <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="index.php" role="tab" aria-controls="pills-home" aria-selected="false">Principal</a>
            </li>
             <li class="nav-item">
                 <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="contatos.php" role="tab" aria-controls="pills-profile" aria-selected="true">Contatos</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="cidades.php" role="tab" aria-controls="pills-contact" aria-selected="false">Cidades</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="TiposdeContatos.php" role="tab" aria-controls="pills-contact" aria-selected="false">Tipo de Conotatos</a>
             </li>
            </ul>
  
            <!-- fim navbar-->

            <!--Inicio cabeçario-->

            <header>
                <div class="alert alert-primary" role="alert">
                    <center>
                        <h1>
                            Contato
                        </h1>
                    </center>
                </div>
            </header>

            <!--Fim cabeçario-->



            <!-- Inicio Formulario-->            

            <form name="formContato" action="salvarcontato.php" method="GET">

                <!-- Inicio do elemento de entrada IDCONTATO -->

                <div class="mb-3">
                    <label for="exampleInputEmail1">Código do Contato</label>

                    <input class="form-control" 
                           type="text" 
                           id="campoIDCONTATO"
                           NAME="campoIDCONTATO"
                           value="<?php echo $contato->getIdContato();?>"
                           placeholder="Input só de leitura, aqui..." 
                           readonly>

                    <div id="emailHelp" class="form-text">O codigo é gerado pelo sistema</div>
                </div>

                <!-- FIM do elemento de entrada IDCONTATO -->


                <!-- Inicio do elemento de entrada NOME-->

                <div class="mb-3">
                    <label for="campoNOME">Nome</label>

                    <input type="text" 
                           class="form-control" 
                           id="campoNOME" 
                           name="campoNome"
                           value="<?php echo $contato->getNome();?>"
                           aria-describedby="emailHelp"
                           placeholder="Nome do contato"
                           required=>

                    <div id="emailHelp" class="form-text">Informe o nome completo do contato</div>
                </div>

                <!-- FIM do elemento de entrada NOME-->


                <!--Inicio do elemento de entrada EMAIL-->

                <div class="mb-3">
                    <label for="campoNOME">Endereço de Email</label>

                    <input type="email" 
                           class="form-control" 
                           id="campoEMAIL" 
                           name="campoEMAIL"
                           value="<?php echo $contato->getEmail();?>"
                           aria-describedby="emailHelp"
                           placeholder=" Informe o email "
                           required=>

                    <div id="emailHelp" class="form-text">Informe um email vaido do contato</div>
                </div>

                <!--FIM do elemento de entrada EMAIL-->


                <!--Inicio do elemento de entrada TELEFONE-->

                <div class="mb-3">
                    <label for="campoNOME">Telefone</label>

                    <input type="text" 
                           class="form-control" 
                           id="campoTELEFONE" 
                           name="campoTELEFONE"
                           value="<?php echo $contato->getTelefone();?>"
                           aria-describedby="emailHelp"
                           placeholder="Informe o telefone no formato indicado"
                           pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}"
                           required=>

                    <div id="emailHelp" class="form-text">Informe um telefone no formato 99-99999-9999</div>
                </div>

                <!--FIM do elemento de entrada TELEFONE-->


                <!--Inicio do elemento de entrada IDCIDADE-->

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Selecionar a Cidade</label>
                    
                    <select class="form-control" 
                            id="campoIDCIDADE"
                            name="campoIDCIDADE"
                            aria-describedby="emailHelp"
                            required="">
                        
                        <?php
                        include("conexao.php");
                        $select = "SELECT * FROM cidade ORDER BY NOME";
                        $retornoDaConsulta = $PDO->prepare($select);
                        $retornoDaConsulta->execute();
                        foreach ($retornoDaConsulta as $registro){
                            
                            $idCidade = utf8_encode($registro["IDCIDADE"]);
                            $nome = utf8_encode($registro["NOME"]);
                            if($contato->getIdCidade() != $idCidade){
                                
                                echo "<option value='$idCidade'>$nome</option>";
                                
                            }else{
                                
                                echo "<option value='$idCidade' selected>$nome</option>";
                                
                            }
                        }
                        
                        ?>

                    </select>
                    <div id="emailHelp" class="form-text">Indique a cidade onde o contato mora</div>
                </div>

                <!--FIM do elemento de entrada IDCIDADE-->


                <!--Inicio do elemento de entrada IDTIPODECIDADE-->

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo de contato</label>
                    <select class="form-control" 
                            id="campoIDTIPODECONTATO"
                            name="campoIDTIPODECONTATO"
                            aria-describedby="tipodecontatoHelp"
                            required="">
                        
                         <?php
                        include("conexao.php");
                        $select = "SELECT * FROM tipodecontato ORDER BY NOME";
                        $retornoDaConsulta = $PDO->prepare($select);
                        $retornoDaConsulta->execute();
                        foreach ($retornoDaConsulta as $registro){
                            
                            $idTipoDeContato = utf8_encode($registro["IDTIPODECONTATO"]);
                            $nome = utf8_encode($registro["NOME"]);
                            if($contato->getIdTipoDeContato() != $idTipoDeContato){
                                
                                echo "<option value='$idTipoDeContato'>$nome</option>";
                                
                            }else{
                                
                                echo "<option value='$idTipoDeContato' selected>$nome</option>";
                                
                            }
                        }
                        
                        ?>

                    </select>
                    <div id="emailHelp" class="form-text">Indique o tipo de contato</div>
                </div>

                <!--FIM do elemento de entrada IDTIPODECIDADE-->


                <!--Inicio do botao ENVIAR-->

                <input type="submit" value="Salvar"

                <!--FIM do botao ENVIAR-->

            </form>

            <!-- Fim Formulario-->
            
            <br><br>

            <!-- Inicio footer-->

            <footer>
                <div class="alert alert-info" role="alert">
                    <center>
                        <strong>Agenda de Contatos</strong> .:. Desenvolvido por João Vitor Moreira .:. Direitos Reservados &COPY;
                    </center>
                </div>
            </footer>

            <!-- Fim footer-->


        </div>]
        <!-- Fim DIV container-->     



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>