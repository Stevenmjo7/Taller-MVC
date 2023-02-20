<?php
include "conexion.php";
$id=$_GET["id"];

$sql=$conexion->query(" select * from persona where id=$id")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha3
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<form class="col-4 p-3 m-auto" method="post">
        <h3 class="text-center text-secondary ">Modificar personas</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "controlador/modificar_persona.php";
        while ($datos=$sql->fetch_object()) {?>
              <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombres</label>
    <input type="text" class="form-control" name="nombres" value="<?= $datos->nombres ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" value="<?= $datos->apellidos ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tipo de documento</label>
    <input type="text" class="form-control" name="tipodocumento" value="<?= $datos->idtipodocumento ?>">
    <div id="tipodocumentohelp1" class="form-text">1: cédula de ciudadanía</div>
    <div id="tipodocumentohelp2" class="form-text">2: tarjeta de identidad</div>
    <div id="tipodocumentohelp3" class="form-text">3: cédula de extranjería</div>
    <div id="tipodocumentohelp4" class="form-text">4: pasaporte</div>
    <div id="tipodocumentohelp5" class="form-text">5: registro civil</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Documento</label>
    <input type="text" class="form-control" name="documento" value="<?= $datos->documento ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lugar de nacimiento</label>
    <input type="text" class="form-control" name="lugarnacimiento" value="<?= $datos->lugarresidencia ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fechanacimiento" value="<?= $datos->fechanacimiento ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $datos->email ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teléfono</label>
    <input type="text" class="form-control" name="telefono" value="<?= $datos->telefono ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="usuario" value="<?= $datos->usuario ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
    <input type="text" class="form-control" name="password" value="<?= $datos->password ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Confirmar contraseña</label>
    <input type="text" class="form-control" name="conpassword" value="<?= $datos->password ?>">
  </div>
        <?php }
        ?>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar persona</button>
</form>
</body>
</html>