<?php
   
include("conexao.php");
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/contatos.css">

        <title>Agenda de Contatos</title>
    </head>
    <body>

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
                            Contatos
                        </h1>
                    </center>
                </div>
            </header>

            <!--Fim cabeçario-->

            <!--Inicio do Botao Novo superior-->
            <a href="contato.php?idContato=0">
                <button type="button" class="btn btn-primary">Novo Contato</button>
            </a>
            <!--Fim do Botao Novo superior-->



            <!--Inicio tabela-->

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Tipo de Contatos</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                
                
                <tbody>
                    
                    <?php
                    $select = "SELECT * FROM ViewContato;";
                    
                    $retornoDaConsulta = $PDO->prepare($select);
                    $retornoDaConsulta->execute();
                    foreach ($retornoDaConsulta as $registro ) {
                        
                        $idContato = utf8_encode($registro["Idcontato"]);
                        $nome = utf8_encode($registro["Nome"]);
                        $email = utf8_encode($registro["EMail"]);
                        $telefone = utf8_encode($registro["Telefone"]);
                        $cidade = utf8_encode($registro["Cidade"]);
                        $tipodecontato = utf8_encode($registro["TipoDeContato"]);
                                           
                    ?>
                    
                    <tr>
                        <th scope="row"><?php echo $idContato ;?></th>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $telefone; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $cidade; ?></td>
                        <td><?php echo $tipodecontato; ?></td>
                        <td>    
                            <a href="contato.php?idContato=<?php echo $idContato; ?>">
                                <button type="button" class="btn btn-warning">Alterar</button>  
                            </a>
                        </td>
                        <td>         
                            <a href="excluircontato.php?idContato=<?php echo $idContato; ?>">                   
                            <button type="button" class="btn btn-danger">Excluir</button>                           
                        </td>
                    </tr>
                    
                    
                    <?php                   
                    }
                    ?>
                </tbody>
            </table>

            <!--final tabela-->

            <!--Inicio do Botao Novo inferior-->
            <a href="contato.php?idContato=0">
                <button type="button" class="btn btn-primary">Novo Contato</button>
            </a>
            <!--Fim do Botao Novo inferior-->

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

        </div>
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

