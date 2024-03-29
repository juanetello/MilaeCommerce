<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap4.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/76186c1f83.js"></script>
    <title>carrito</title>
  </head>
  <body class="">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-black static-top">
          <div class="container">
              <a class="navbar-brand" href="index.php">
                  <img src="img/miladogo2.png" class="mila-logo" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="index.php">INICIO
                              <span class="sr-only">(current)</span>
                          </a>
                      </li>
                      <!--<li class="nav-item">
                          <a class="nav-link" href="contacto.html">CONTACTO</a>
                      </li>-->
                      <li class="nav-item">
                          <a class="nav-link" href="cuenta.php">SESIÓN</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
    </header>

    <main class="container">
      <div class="jumbotron mt-4">
        <h1 class="display-4">¡Bienvenido a su carrito de compra!</h1>
        <p class="lead">A continuación se detallan los articulos que ud haya agregado para su compra o si ha decidido guardar alguno.</p>
        <hr class="my-4">
        <div role="">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#carrito" role="tab" aria-controls="home" aria-selected="true">Carrito (1)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#guardado" role="tab" aria-controls="profile" aria-selected="false">Guardado (0)</a>
            </li>
          </ul>
          <div class="tab-content bg-white" id="myTabContent">
           <div class="tab-pane fade show active" id="carrito" role="tabpanel" aria-labelledby="home-tab">
             <div class="card mb-3 alert alert-dismissible fade show">
               <button type="button" name="button" class="close" data-dismiss="alert">
                 Eliminar
                 <span>&times;</span>
                 <!-- &times; = x, cruz para cerrar -->
               </button>
               <div class="row no-gutters articulo m-5">
                 <div class="col-md-4 cont-img">
                   <img src="img/prod1.jpeg" class="card-img ml-3 mr-3" alt="...">
                 </div>
                 <div class="col-md-8 ">
                   <div class="card-body mt-5">
                     <h5 class="card-title">Artículo</h5>
                     <p class="card-text align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                     <button type="button" class="btn btn-outline-primary btn-lg btn-block align-bottom carrito">Comprar</button>
                   </div>
                 </div>
               </div>
             </div>
           </div>
            <div class="tab-pane fade" id="guardado" role="tabpanel" aria-labelledby="profile-tab">
              <p class="jumbotron bg-white">No contiene artículos guardados</p>
            </div>
          </div>

        </div>

      </div>

    </main>

    <footer class="fixed-bottom mt-5">
      <div class="container-fluid footer-copyright text-center py-3 bg-copy text-light">© 2019 - MILA DOGO - <strong>Todos los derechos reservados.</strong>
      </div>
    </footer>

    <script src="https://kit.fontawesome.com/62cc376e3d.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
  </body>
</html>
