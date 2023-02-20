<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3c79b2250e.js" crossorigin="anonymous"></script>
</head>
<body>
  <script>
    function eliminar(){
      var respuesta=confirm("Estás seguro que deseas eliminarlo?");
      return respuesta
    }
  </script>
    <h1 class="text-center p-3">CRUD MVC</h1>
    <div class="container-fluid row">
    <form class="col-4 p-3" method="post">
        <h3 class="text-center text-secondary ">Registro de personas</h3>

        <?php
        include "conexion.php";
        include "controlador/registro_persona.php";
        include "controlador/eliminar_persona.php";
        ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombres</label>
    <input type="text" class="form-control" name="nombres">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tipo de documento</label>
    <input type="text" class="form-control" name="tipodocumento">
    <div id="tipodocumentohelp1" class="form-text">1: cédula de ciudadanía</div>
    <div id="tipodocumentohelp2" class="form-text">2: tarjeta de identidad</div>
    <div id="tipodocumentohelp3" class="form-text">3: cédula de extranjería</div>
    <div id="tipodocumentohelp4" class="form-text">4: pasaporte</div>
    <div id="tipodocumentohelp5" class="form-text">5: registro civil</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Documento</label>
    <input type="text" class="form-control" name="documento">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lugar de nacimiento</label>
    <input type="text" class="form-control" name="lugarnacimiento">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fechanacimiento">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teléfono</label>
    <input type="text" class="form-control" name="telefono">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="usuario">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
    <input type="text" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Confirmar contraseña</label>
    <input type="text" class="form-control" name="conpassword">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lugar de residencia</label>
    <input type="text" class="form-control" name="lugarresidencia">
  </div>
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form>
<div class="col-8 p-4">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">ID TIPODOCUMENTO</th>
      <th scope="col">DOCUMENTO</th>
      <th scope="col">LUGAR NACIMIENTO</th>
      <th scope="col">FECHA NACIMIENTO</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TELÉFONO</th>
      <th scope="col">USER</th>
      <th scope="col">PASSWORD</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "conexion.php";
    $sql=$conexion->query(" select * from persona ");

    while($datos=$sql->fetch_object()){ ?>
    <tr>
      <th scope="row"><?= $datos->id ?></th>
      <td><?= $datos->nombres ?></td>
      <td><?= $datos->apellidos ?></td>
      <td><?= $datos->idtipodocumento ?></td>
      <td><?= $datos->documento ?></td>
      <td><?= $datos->lugarresidencia ?></td>
      <td><?= $datos->fechanacimiento ?></td>
      <td><?= $datos->email ?></td>
      <td><?= $datos->telefono ?></td>
      <td><?= $datos->usuario ?></td>
      <td><?= $datos->password ?></td>
      <td>
        <a href="modificar_registro.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen"></i></a>
        <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-regular fa-trash-can"></i></a>
      </td>
    </tr>

    <?php }
    ?>
    

  </tbody>
</table>
</div>
    </div>

</body>
</html>