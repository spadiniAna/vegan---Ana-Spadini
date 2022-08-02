<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilo.css" rel="stylesheet" type="text/css" />


        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>++Vegan - Receitas</title>
    </head>
    <body style="background-color: rgb(255, 244, 213);">

    
        <?php
            include_once 'header.php';
        ?>
        
        
      <div class="container">

      <h3 class="display-5 text-center" style="color: #92a34f;">Receitas</h3>
      <hr>

      <form class="d-flex" role="search">
        <input class="form-control form-control-lg me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-dark" type="submit">Pesquisar</button>
      </form>

      <div class="card mb-3" style="border-radius: 10px; max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/vegan_inicial.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="border-radius: 10px; max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/vegan_inicial.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

      <div>
        <a hfer="inserir_receita.php" role='button' class="btn btn-dark" style="float: right;">Nova receita</a>
      </div>


      <div>

        <nav style="background-color: rgb(255, 244, 213);">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link text-dark">Voltar</a>
            </li>
            <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link text-dark"href="#">Próximo</a>
            </li>
          </ul>
        </nav>

      </div>

      </div>

      <footer class="py-5">
        <div class="bg-dark text-light fixed-bottom d-flex justify-content-between py-4 border-top">
          <p>&copy; 2022 Company, Inc. All rights reserved.</p>
        </div>
      </footer>	
      
    </body>
</html>
