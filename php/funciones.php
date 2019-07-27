<?php
$genero = "";
$ext = "";
$cond = "";

function validacion($datos){

  $errores = [];


  global $ext;


  $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);

  //echo "$ext";

  global $genero;
  global $cond;

  if (isset($datos["genero"])) {
    $genero = $datos["genero"];
  }else{
    $genero = "";
  }

  if (isset($datos["term"])) {
    $cond = $datos["term"];
  }else{
    $cond = "";
  }

if(strlen($datos["nombre"]) < 3){
  $errores ["nombre"] = "El nombre debe tener por lo menos 3 caracteres";
}
if(strlen($datos["apellido"]) < 3){
  $errores ["apellido"] = "El apellido debe tener por lo menos 3 caracteres";
}
if(strlen($datos["user"]) < 6){
  $errores ["user"] = "El usuario debe tener por lo menos 6 caracteres";
}
if ($datos["origen"] == "vacio") {
  $errores ["pais"] = "Debe seleccionar un país";
}
if (strlen($datos["domicilio"]) < 8) {
  $errores ["domicilio"] = "El domicilio debe tener por lo menos 8 caracteres";
}
if ($datos["nacimiento"] == "") {
  $errores["nacimiento"] = "Debe colocar una fecha de nacimiento";
}
else if (validateAge($datos["nacimiento"]) == false) {
  $errores["nacimiento"] = "Debe ser mayor de edad";
}
if ($genero == "") {
  $errores["genero"] = "Debe seleccionar un género";
}

if ($datos["email"] == "") {
  $errores["email"] = "Debe colocar un email";
}
else if (filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false) {
  $errores["email"] = "El formato del email no es valido";
}

if ($datos["pass"] == "") {
  $errores["pass"] = "Debe colocar una contraseña";
}

if ($datos["repass"] == "") {
  $errores["repass"] = "Debe colocar la confirmación";
}

if ($datos["pass"] != "" && $datos["repass"] != "" && $datos["pass"] != $datos["repass"]) {
  $errores["pass"] = "La contraseña y la confirmación son distintas";
}

if ($ext != "jpg" && $ext != "png" && $ext != "jpeg" ) {
  $errores["avatar"] = "Seleccione un formato valido";
}

if($cond == ""){
  $errores["cond"] = "Debe aceptar terminos y condiciones";
}

return $errores;
}

function validateAge($birthday, $age = 18)
{
    // $birthday can be UNIX_TIMESTAMP or just a string-date.
    if(is_string($birthday)) {
        $birthday = strtotime($birthday);
    }

    // check
    // 31536000 is the number of seconds in a 365 days year.
    if(time() - $birthday < $age * 31536000)  {
        return false;
    }

    return true;
}
 ?>
