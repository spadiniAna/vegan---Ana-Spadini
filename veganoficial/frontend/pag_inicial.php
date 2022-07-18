<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilo.css" rel="stylesheet" type="text/css" />


        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>++Vegan</title>
    </head>
    <body style="background-color: rgb(255, 244, 213);">

      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand text-light" href="#">++Vegan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="pag_inicial.php">Página inicial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="receitas.php">Receitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="mapa.php">Mapa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="saude.php">Saúde</a>
              </li>
            </ul>
          </div>
          <div>
              <ul class="navbar-nav justify-content-end me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="login.php">Login</a>
                </li>
                <div class="vr text-light"></div>
                <li class="nav-item">
                    <a class="nav-link text-light" href="cadastro.php">Cadastre-se</a>
                </li>
              </ul>
          </div>
        </div>
      </nav>
      <div class="container" style="margin-top: 15px; background-color: rgb(255, 244, 213);">

              <div id="carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active ratio ratio-21x9">
                        <img src="img/vegan_inicial.jpg" class="d-block w-100 imgCarrossel" alt="Imagem Carrossel">
                    </div>

                </div>
              </div>

              <h1 class="display-1 text-center" style="color: #92a34f;">Bem vindo!</h1>
              <hr>
              <h5 class="display-6 text-center" style="color: #92a34f;">Fique por dentro do mundo vegano</h5>

              <div class="row justify-content-center" style="background-color: white;">

              <p>olá</p>


              </div>

              <div class="row justify-content-center" style="margin-top: 20px;">

                <div class="card col-lg-3">
                  <h5 class="card-header text-light" style="background-color: #92a34f;">Receitas</h5>
                  <div class="card-body">
                    <h5 class="card-title">Brigadeiro</h5>
                    <p class="card-text">Aprenda a fazer brigadeiro com leite de amendoas</p>
                    <a href="#" class="btn btn-outline-dark">Ver receita</a>
                  </div>
                </div>
                
                <div class="card col-lg-3">
                  <h5 class="card-header text-light" style="background-color: #92a34f;">Mapa</h5>
                  <div class="card-body">
                    <h5 class="card-title">Pizzaria</h5>
                    <p class="card-text">Aprenda a fazer brigadeiro com leite de amendoas</p>
                    <a href="#" class="btn btn-outline-dark">Ver estabelecimento</a>
                  </div>
                </div>

                
                <div class="card col-lg-3">
                  <h5 class="card-header text-light" style="background-color: #92a34f;">Blog</h5>
                  <div class="card-body">
                    <h5 class="card-title">Os tipos de leite</h5>
                    <p class="card-text">Aprenda a fazer brigadeiro com leite de amendoas</p>
                    <a href="#" class="btn btn-outline-dark"><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
            
                </div>

              </div>
      </div>

              <footer class="py-5">
                <div class="bg-dark text-light fixed-bottom d-flex justify-content-between py-4 border-top">
                    <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                </div>
            </footer>	

    </body>
</html>