<?php

require_once("funciones.php");

$paises = [
  "AR" => "Argentina",
  "BO" => "Bolivia",
  "BR" => "Brasil",
  "CH" => "Chile",
  "CO" => "Colombia",
  "EC" => "Ecuador",
  "PR" => "Paraguay",
  "UR" => "Uruguay",
  "VE" => "Venezuela"
];

// echo "<pre>";
// var_dump($paises);exit;



$nombreDefault = "";
$apellidoDefault = "";
$userDefault = "";
$domicilioDefault = "";
$nacimientoDefault = "";
$avatarDefault = "";
$emailDefault = "";



if ($_POST) {
  //echo " viene por post";
  //VALIDAR
  $errores = validacion($_POST);

  // foreach ($errores as $error) {
  //   echo $error . "<br>";
  // }
  // echo "<pre>";
  //echo $_POST["origen"];
  // echo $errores["pais"];exit;
  // echo $errores["pais"];exit;
  // var_dump($errores); exit;

  $nombreDefault = $_POST["nombre"];
  $apellidoDefault = $_POST["apellido"];
  $userDefault = $_POST["user"];
  $domicilioDefault = $_POST["domicilio"];
  $nacimientoDefault = $_POST["nacimiento"];
  $avatarDefault = "Archivo: ".$_FILES["avatar"]["name"];
  $emailDefault = $_POST["email"];

  //echo "$avatarDefault";exit;

// echo "<pre>";
// var_dump($_FILES);exit;

// echo "ext: $ext";exit;



}





 ?>
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
    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/puppy_icon.ico"/>
    <!-- TITULO -->
    <title>MILA DOGO - REGISTER</title>
</head>

<body class="caja-register">

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-black static-top">
      <div class="container">
          <a class="navbar-brand" href="index.html">
              <img src="img/miladogo2.png" class="mila-logo" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                  aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.html">INICIO
                          <span class="sr-only">(current)</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contacto.html">CONTACTO</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/">SESIÓN</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
</header>


<main>
  <section class="container-fluid row justify-content-center reg">
      <section class="col-10 col-sm-6 col-md-6 col-lg-4">
          <form class="form-container-reg w-100" action="register.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="nombre" class="d-block text-center text-white bg-primary">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Ingrese su nombre" value="<?=$nombreDefault?>">
                  <?php if($_POST && strlen($_POST["nombre"]) < 3): ?>

                    <?php foreach ($errores as $error): ?>
                    <?php if ($error == $errores["nombre"]): ?>
                      <label for="error" class="text-danger">
                        <?=$error?>
                      </label>
                    <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>


              </div>
              <div class="form-group">
                  <label for="apellido" class="d-block text-center text-white bg-primary">Apellido</label>
                  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" value="<?=$apellidoDefault ?>">
                  <?php if ($_POST): ?>
                    <?php if(strlen($_POST["apellido"]) < 3) : ?>
                    <?php foreach ($errores as $error): ?>
                    <?php if ($error == $errores["apellido"]): ?>
                      <label for="error" class="text-danger">
                        <?=$error?>
                      </label>
                    <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                <?php endif; ?>

              </div>
              <div class="form-group">
                  <label for="user" class="d-block text-center text-white bg-primary">Usuario</label>
                  <input type="text" class="form-control" id="user" name="user" placeholder="Ingrese su usuario" value="<?=$userDefault ?>">
                  <?php if($_POST): ?>
                  <?php if (strlen($_POST["user"]) < 6): ?>
                    <?php foreach ($errores as $error): ?>
                    <?php if ($error == $errores["user"]): ?>
                      <label for="error" class="text-danger">
                        <?=$error?>
                      </label>
                    <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
              <div class="form-group">
                  <label for="pais" class="d-block text-center text-white bg-primary">Pais de nacimiento</label>
                  <select name="origen" class="custom-select  w-100">
                    <option value="vacio">Seleccione un País</option>

                    <?php foreach($paises as $key => $pais): ?>
                      <?php if($_POST && $_POST["origen"] == "$key"): ?>
                    <option value="<?=$key?>" selected><?=$pais?></option>
                      <?php else: ?>
                    <option value="<?=$key?>"><?=$pais?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>

                  </select>
              <?php if($_POST && $_POST["origen"] == "vacio"): ?>
                 <?php foreach ($errores as $error): ?>
                 <?php if ($error == $errores["pais"]): ?>
                   <label for="error" class="text-danger">
                   <?=$error?>
                   </label>
                 <?php endif; ?>
                 <?php endforeach; ?>
               <?php endif; ?>


              </div>
              <div class="form-group">
                  <label for="domicilio" class="d-block text-center text-white bg-primary">Domicilio</label>
                  <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Ingrese su domicilio" value="<?=$domicilioDefault?>">
                  <?php if($_POST && strlen($_POST["domicilio"])<8): ?>
                     <?php foreach ($errores as $error): ?>
                     <?php if ($error == $errores["domicilio"]): ?>
                       <label for="error" class="text-danger">
                       <?=$error?>
                       </label>
                     <?php endif; ?>
                     <?php endforeach; ?>
                   <?php endif; ?>

              </div>
              <div class="form-group">
                  <label for="nacimiento" class="d-block text-center text-white bg-primary">Fecha de nacimiento</label>
                  <input type="date" class="form-control" id="nacimiento" name="nacimiento" placeholder="Ingrese su nombre" value="<?=$nacimientoDefault?>">
                  <?php if($_POST && ($_POST["nacimiento"] == "" || validateAge($_POST["nacimiento"]) == false)): ?>
                     <?php foreach ($errores as $error): ?>
                     <?php if ($error == $errores["nacimiento"]): ?>
                       <label for="error" class="text-danger">
                       <?=$error?>
                       </label>
                     <?php endif; ?>
                     <?php endforeach; ?>
                   <?php endif; ?>


              </div>
              <div class="form-group">
                  <label for="genero" class="d-block text-center text-white bg-primary">Género</label>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="genero" id="masc" value="op1" <?php if ($genero == "op1") echo "checked";?>>
                      <label class="form-check-label" for="masc">
                          Masculino
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="genero" id="fem" value="op2"<?php if ($genero == "op2") echo "checked";?>>
                      <label class="form-check-label" for="fem">
                          Femenino
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="genero" id="otro" value="op3"
                      <?php if ($genero == "op3") echo "checked";?>>
                      <label class="form-check-label d-block" for="otro">
                          Otro
                      </label>
                      <?php if($_POST && $genero == "" ): ?>
                         <?php foreach ($errores as $error): ?>
                         <?php if ($error == $errores["genero"]): ?>
                           <label for="error" class="text-danger">
                           <?=$error?>
                           </label>
                         <?php endif; ?>
                         <?php endforeach; ?>
                       <?php endif; ?>
                    </div>

              </div>
              <div class="form-group">
                  <label for="email" class="d-block text-center text-white bg-primary">Email</label>
                  <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                         placeholder="Ingrese su email" value="<?=$emailDefault ?>" >
                  <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu email con nadie</small>
                  <?php if($_POST && ($_POST["email"] == "" || filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false)): ?>
                     <?php foreach ($errores as $error): ?>
                     <?php if ($error == $errores["email"]): ?>
                       <label for="error" class="text-danger">
                       <?=$error?>
                       </label>
                     <?php endif; ?>
                     <?php endforeach; ?>
                   <?php endif; ?>
              </div>
              <div class="form-group">
                  <label for="pass" class="d-block text-center text-white bg-primary">Contraseña</label>
                  <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
                  <?php if($_POST && $_POST["pass"] == ""): ?>
                     <?php foreach ($errores as $error): ?>
                     <?php if ($error == $errores["pass"]): ?>
                       <label for="error" class="text-danger">
                       <?=$error?>
                       </label>
                     <?php endif; ?>
                     <?php endforeach; ?>
                   <?php endif; ?>
              </div>
              <div class="form-group">
                  <label for="repass" class="d-block text-center text-white bg-primary">Confirmación Contraseña</label>
                  <input type="password" class="form-control" id="repass" name="repass" placeholder="Confirmación">
                         <?php if($_POST && $_POST["repass"] == ""): ?>
                            <?php foreach ($errores as $error): ?>
                            <?php if ($error == $errores["repass"]): ?>
                              <label for="error" class="text-danger">
                              <?=$error?>
                              </label>
                            <?php endif; ?>
                            <?php endforeach; ?>
                          <?php endif; ?>
                          <?php if($_POST): ?>
                            <?php if($_POST["pass"] != "" && $_POST["repass"] != "" && $_POST["pass"] != $_POST["repass"]): ?>
                              <?php foreach($errores as $error): ?>
                                <?php if($error == $errores["pass"]): ?>
                                  <label for="error" class="text-danger"><?=$error ?></label>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          <?php endif; ?>
              </div>
              <div class="form-group">
                  <label for="repass" class="d-block text-center text-white bg-primary">Ingrese su avatar(.jpg, .png, .jpeg)</label>
                  <?php if($ext != ""): ?>
                    <label for="avatarDefault" class="text-success">
                      <?=$avatarDefault ?>
                    </label>

                  <?php endif; ?>
                  <input type="file" class="form-control" id="avatar" name="avatar">
                  <?php if($_POST && ($ext != "jpg" && $ext != "png" && $ext != "jpeg" )): ?>
                     <?php foreach ($errores as $error): ?>
                     <?php if ($error == $errores["avatar"]): ?>
                       <label for="error" class="text-danger">
                       <?=$error?>
                       </label>
                     <?php endif; ?>
                     <?php endforeach; ?>
                   <?php endif; ?>
              </div>
              <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="check" name="term"
                  value="cond"
                  <?php if($cond == "cond") echo "checked"; ?>>
                  <label class="form-check-label d-block" for="exampleCheck1"><a href="#">Términos y condiciones</a></label>
                  <?php if($_POST && $cond == ""): ?>
                     <?php foreach ($errores as $error): ?>
                     <?php if ($error == $errores["cond"]): ?>
                       <label for="error" class="text-danger">
                       <?=$error?>
                       </label>
                     <?php endif; ?>
                     <?php endforeach; ?>
                   <?php endif; ?>

              </div>
              <div class="d-flex flex-row botones">
                  <button type="submit" class="btn btn-outline-primary d-block btn-sm w-50">Enviar</button>
                  <button type="reset" name="button" class="btn btn-outline-primary d-block btn-sm w-50">Borrar
                  </button>
              </div>
          </form>
      </section>
  </section>

</main>

<footer class="">
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
