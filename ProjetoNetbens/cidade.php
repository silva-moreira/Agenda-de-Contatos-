<?php
    $idCidade=$_GET["idCidade"];
    include("classeCidade.php");
    $cidade = new classeCidade();
    $cidade->setIdCidade($idCidade);
    $cidade->setNome("");
    if($cidade->getIdCidade()!=0){
        
        $cidade->consultarCidade();
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
        <link rel="stylesheet" href="css/cidade.css">

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
                 <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="contatos.php" role="tab" aria-controls="pills-profile" aria-selected="false">Contatos</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link active" id="pills-contact-tab" data-toggle="pill" href="cidades.php" role="tab" aria-controls="pills-contact" aria-selected="true">Cidades</a>
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
                            Cidade
                        </h1>
                    </center>
                </div>
            </header>

            <!--Fim cabeçario-->

            <!-- Inicio Formulario-->            

            <form name="formcidade" action="salvarcidade.php" method="GET">


                <!-- Inicio do elemento de entrada IDCIDADE -->

                <div class="mb-3">
                    <label for="campoIDCIDADE">Código da cidade</label>

                    <input class="form-control" 
                           type="text" 
                           id="campoIDCIDADE"
                           name="campoIDCIDADE"
                           placeholder="Input só de leitura, aqui..."
                           value="<?php echo $cidade->getIdCidade(); ?>"
                           readonly>

                    <div id="campoIDCIDADEHelp" class="form-text">O codigo é gerado pelo sistema</div>
                </div>

                <!-- FIM do elemento de entrada IDCIDADE -->

                <div class="mb-3">
                    <label for="campoNOME">Nome</label>

                    <input type="text" 
                           class="form-control" 
                           id="campoNOME" 
                           name="campoNome"
                           aria-describedby="nomeHelp"
                           placeholder="Nome da cidade"
                           value="<?php echo $cidade->getNome(); ?>"
                           required=>

                    <div id="nomeHelp" class="form-text">Informe o nome da cidade</div>
                </div>

                <!-- FIM do elemento de entrada NOME-->

                <!--Inicio do botao ENVIAR-->

                <input type="submit" value="Salvar">

                <!--FIM do botao ENVIAR-->


            </form>

            <!--FIM formulario-->
            
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

            <!-- Inicio Formulario-->            

            <form name="" action="" method="GET">




            </form>

            <!-- Fim Formulario-->


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