<?php
#validar que el usuario de dio clic al botón
if (!empty($_POST["btnregistrar"])) {
    #validar que el usuario ingrese los datos
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["tipodocumento"]) and !empty($_POST["documento"]) and !empty($_POST["lugarnacimiento"]) and !empty($_POST["fechanacimiento"]) and !empty($_POST["exampleInputEmail1"]) and !empty($_POST["telefono"]) and !empty($_POST["usuario"]) and !empty($_POST["password"]) ){

        $nombre=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $tipodocumento=$_POST["tipodocumento"];
        $documento=$_POST["documento"];
        $lugarresidencia=$_POST["lugarnacimiento"];
        
        $fechanacimiento=$_POST["fechanacimiento"];
        
        $exampleInputEmail1=$_POST["exampleInputEmail1"];
        
        $telefono=$_POST["telefono"];
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        echo '<div class="aler alert-succes">Campos llenos</div>';
        $sql=$conexion->query("insert into persona (nombres, apellidos, idtipodocumento, documento, lugarresidencia, fechanacimiento, email, telefono, usuario, password) VALUE ('$nombre', '$apellidos', '$tipodocumento', '$documento', '$lugarresidencia', '$fechanacimiento', '$exampleInputEmail1','$telefono', '$usuario', '$password')");

        if ($sql==1){
            echo '<div class="alert alert-succes">Persona registrada correctamente</div>';
        }
        else {
            echo '<div class="alert alert-danger">Persona NO registrada</div>';
        }


    }else {
        echo '<div class="alert alert-danger">Algunos de los campos están vacios</div>';
    }
}

?>