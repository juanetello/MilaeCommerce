<?php


function validacion($datos){

  $errores = [];

if(strlen($datos["nombre"]) < 3){
  $errores ["nombre"] = "El nombre debe tener por lo menos 3 caracteres";
}
if(strlen($datos["apellido"]) < 3){
  $errores ["apellido"] = "El apellido debe tener por lo menos 3 caracteres";
}
if(strlen($datos["user"]) < 6){
  $errores ["user"] = "El usuario debe tener por lo menos 6 caracteres";
}
if ($datos["pais"] = "") {
  $errores ["pais"] = "Debe seleccionar un país";
}
if ($datos["email"] == "") {
  $errores["email"] = "Debe colocar un email";
}
else if (filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false) {
  $errores["email"] = "El formato del email no es valido";
}

return $errores;
}
 ?>
