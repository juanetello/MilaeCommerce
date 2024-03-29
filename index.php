<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap4.css">
        <!-- Estilos -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/76186c1f83.js"></script>
        <!-- FAVICON -->
        <link rel="shortcut icon" href="img/puppy_icon.ico"/>
        <!-- TITULO -->
        <title>MILA DOGO</title>
    </head>

    <body>

        <!-- Botonera -->
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
                            <li class="nav-item">
                                <a class="nav-link" href="#productos">PRODUCTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#FAQ">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.php">CONTACTO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="php/register.php">REGISTRARSE</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- DATA -->
            <section class="data">
                <div class="container-fluid header-top d-none d-md-block">
                    <div class="container">
                        <div class="row text-light pt-2 pb-2">
                            <!-- Correo del User -->
                            <div class="col-md-5">Soporte: consultas@miladogo.com</div>
                            <div class="col-md-3"></div>
                            <!-- Boton de Cuenta -->
                            <div class="col-md-2"><i class="" aria-hidden="true"><a href="login.html" class="text-white">Iniciar
                                Sesión</a></i>
                            </div>
                            <!-- Carrito -->
                            <div class="col-md-2">
                              <a href="carrito.php" class="text-white">
                              <i class="fa fa-cart-plus" aria-hidden="true"></i> Carrito(0) - $ 0.00
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>

        <main>
          <!-- SLIDER -->
          <div class="container">
            <br>
            <div class="alert alert-success">
              Pantalla de mensaje...
              <a href="carrito.php" class="badge badge-success">Ver Carrito</a>
            </div>
          </div>
          <section>
              <article>
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img class="d-block w-100" src="img/pexels-photo-219598.jpeg" alt="img1">
                              <div class="carousel-caption d-none d-md-block">
                                  <h1>NUESTROS PRODUCTOS</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                  <a class="btn btn-info btn-lg" href="#productos" role="button">Comprar</a>
                             <!--     <button class="btn btn-info btn-lg">Comprar</button>-->
                              </div>
                          </div>
                          <div class="carousel-item">
                              <img class="d-block w-100" src="img/pexels-photo-573271.jpeg" alt="Second slide">
                              <div class="carousel-caption d-none d-md-block">
                                  <h1>LOREM IPSUM</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                  <a class="btn btn-info btn-lg" href="#productos" role="button">Comprar</a>
                                  <!--<button class="btn btn-info btn-lg" Comprar</button>-->

                              </div>
                          </div>

                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </article>
          </section>
          <!-- PRODUCTOS -->
            <section id="productos">
              <div class="container-fluid pt-5 pb-5 bg-light-gray">
                <div class="container-fluid pt-5 pb-5 bg-light-gray">
                  <div class="container">
                    <div class="row">
                      <h4>NUESTROS PRODUCTOS</h4>
                    </div>
                    <div class="row">
                      <div class="underline-blue"></div>
                    </div>
                  </div>

                  <div class="container pt-5">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card">
                          <img src="img/prod1.jpeg" alt="img" class="card-img-top">
                          <div class="card-body">
                            <h4>PROD-1</h4>
                            <h6>$67.87</h6>
                            <a href="detalle.php">
                            <button class="btn btn-info"><i class="fa fa-cart-plus" aria-hidden="true"></i> Comprar</button>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="card">
                          <img src="img/prod1.jpeg" alt="img" class="card-img-top">
                          <div class="card-body">
                            <h4>PROD-1</h4>
                            <h6>$67.87</h6>
                            <a href="detalle.php">
                            <button class="btn btn-info"><i class="fa fa-cart-plus" aria-hidden="true"></i> Comprar</button>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="card">
                          <img src="img/prod1.jpeg" alt="img" class="card-img-top">
                          <div class="card-body">
                            <h4>PROD-1</h4>
                            <h6>$67.87</h6>
                            <a href="detalle.php">
                            <button class="btn btn-info"><i class="fa fa-cart-plus" aria-hidden="true"></i> Comprar</button>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="card">
                          <img src="img/prod1.jpeg" alt="img" class="card-img-top">
                          <div class="card-body">
                            <h4>PROD-1</h4>
                            <h6>$67.87</h6>
                            <a href="detalle.php">
                            <button class="btn btn-info"><i class="fa fa-cart-plus" aria-hidden="true"></i> Comprar</button>
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="container-fluid offer pt-4 pb-3 bg-light-gray d-none d-md-block">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <a href="listado.php" class="btn btn-info btn-lg btn-block">Ver Más</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>


                  <!-- <div class="container">
                      <div class="row">
                          <h4>CATEGORÍAS</h4>
                      </div>
                      <div class="row">
                          <div class="underline-blue"></div>
                      </div>
                  </div>

                  <div id="categorias" class="container pt-5">
                      <div class="row justify-content-around">
                          <div class="col-md-3 col-sm-6 justify-content-center">
                              <div class="card">
                                  <div class="card-body">
                                      <button class="btn btn-info"><i class="fas fa-paw"></i> <a href="alimento_balanceado.html">Alimento Balanceado</a>
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div id="categorias" class="col-md-3 col-sm-6 justify-content-center">
                              <div class="card">
                                  <div class="card-body">
                                      <button class="btn btn-info"><i class="fas fa-paw"> Alimento Enlatado </i>
                                      </button>
                                  </div>
                              </div>
                          </div> -->

          <!-- INFO-->
          <section>
            <div class="container-fluid offer pt-3 pb-3 bg-orange d-none d-md-block">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h4>ENVIOS</h4>
                    <h5>ENVIAMOS A TODO EL PAÍS</h5>
                    <p>+54 9 0261 346-6706</p>
                  </div>
                  <div class="col-md-4">
                    <h4>¿CONSULTAS?</h4>
                    <h5>NO DUDE EN COMUNICARSE</h5>
                    <p>+54 9 0261 346-6706</p>
                  </div>
                  <div class="col-md-4">
                    <h4>VISITANOS</h4>
                    <h5>DIRECCION: Lorem ipsum</h5>
                    <p>+54 9 0261 346-6706</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--FAQ -->
          <section>
              <div class="container-fluid pt-5 pb-5 bg-light-gray">
                  <div class="container">
                      <div class="row">
                          <h4 id="FAQ">Preguntas Frecuentes</h4>
                      </div>
                      <div class="row">
                          <div class="underline-blue"></div>
                      </div>
                  </div>

                  <div class="container pt-5">
                      <div class="row">
                          <div class="col-md-3">
                              <div class="card">
                                  <div class="card-body">
                                      <li>
                                          <i class="fas fa-paw"> Pregunta 1 </i>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                              incididunt ut labore et dolore magna aliqua.</p>
                                      </li>
                                  </div>
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="card">
                                  <div class="card-body">
                                      <li>
                                          <i class="fas fa-paw"> Pregunta 2 </i>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                              incididunt ut labore et dolore magna aliqua. </p>
                                      </li>
                                  </div>
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="card">
                                  <div class="card-body">
                                      <li>
                                          <i class="fas fa-paw"> Pregunta 3 </i>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo
                                              incididunt ut labore et dolore magna aliqua. </p>
                                      </li>
                                  </div>
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="card">
                                  <div class="card-body">
                                      <li>
                                          <i class="fas fa-paw"> Pregunta 4 </i>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                              incididunt ut labore et dolore magna aliqua.</p>
                                      </li>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </div>
              </div>

          </section>
        </main>

        <!-- FOOTER -->
        <footer>

            <section class="page-footer font-small mdb-color pt-4 bg-footer text-light">

                <!-- Footer Links -->
                <div class="container text-center text-md-left">

                    <!-- Footer links -->
                    <div class="row text-center text-md-left mt-3 pb-3">

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">NUESTRA MISIÓN</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">OFRECEMOS:</h6>
                            <p>
                                <a href="#!">ALIMENTOS</a>
                            </p>
                            <p>
                                <a href="#!">CORREAS-STRAPS</a>
                            </p>
                            <p>
                                <a href="#!">JUGUETES</a>
                            </p>
                            <p>
                                <a href="#!">COLCHONES</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">MENÚ</h6>
                            <p>
                                <a href="#!">INICIO</a>
                            </p>
                            <p>
                                <a href="#!">PRODUCTOS</a>
                            </p>
                            <p>
                                <a href="#!">FAQ</a>
                            </p>
                            <p>
                                <a href="#!">CONTACTO</a>
                            </p>
                        </div>

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">UBICANOS</h6>
                            <p>
                                <i class="fas fa-home mr-3"></i> Mendoza, Argentina</p>
                            <p>
                                <i class="fas fa-envelope mr-3"></i> info@miladogo.com</p>
                            <p>
                                <i class="fas fa-phone mr-3"></i> +54 9 0261 346-6706</p>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Footer links -->

                    <hr>

                    <!-- Grid row -->
                    <div class="row d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-7 col-lg-8">

                            <!--Copyright-->
                            <p class="text-center text-md-left">¡Seguinos en las redes!</p>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-5 col-lg-4 ml-lg-0">

                            <!-- Social buttons -->
                            <div class="text-center text-md-right">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Footer Links -->

            </section>

        <!-- MAPA -->

            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 200px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53608.97749195639!2d-68.89353859948214!3d-32.88333032049617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e093ec45179bf%3A0x205a78f6d20efa3a!2sMendoza%2C+Capital%2C+Mendoza!5e0!3m2!1ses-419!2sar!4v1561070107721!5m2!1ses-419!2sar"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        <!-- Copyright -->
            <div class="container-fluid footer-copyright text-center py-3 bg-copy text-light">© 2019 - MILA DOGO - <strong>Todos los derechos reservados.</strong>
            </div>
        <!-- Copyright -->
        </footer>

        <!-- JS, Popper.js, and jQuery -->
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
