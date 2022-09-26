<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">

        <title>Agenda de Contatos</title>
    </head>
    <body>
        
        <div class="container">

        <!-- Inicio navbar-->

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                 <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="index.php" role="tab" aria-controls="pills-home" aria-selected="true">Principal</a>
            </li>
             <li class="nav-item">
                 <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="contatos.php" role="tab" aria-controls="pills-profile" aria-selected="false">Contatos</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="cidades.php" role="tab" aria-controls="pills-contact" aria-selected="false">Cidades</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="TiposdeContatos.php" role="tab" aria-controls="pills-contact" aria-selected="false">Tipo de Conotatos</a>
             </li>
            </ul>
       

        <!-- Fim navbar-->

        <!-- Inicio Slide-->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide1.jpg" class="d-block w-100" alt=" Slider imagem 1">
                </div>
               
                <div class="carousel-item">
                    <img src="img/slide3.jpg" class="d-block w-100" alt=" Slider imagem 3">
                </div>
                <div class="carousel-item">
                    <img src="img/slide4.jpg" class="d-block w-100" alt=" Slider imagem 4">
                </div>
               
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Fim Slide-->

        <!-- Inicio footer-->
        <br>
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