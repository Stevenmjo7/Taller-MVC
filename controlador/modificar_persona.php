<?php
#si se presiona ese botón
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["tipodocumento"]) and !empty($_POST["documento"]) and !empty($_POST["lugarnacimiento"]) and !empty($_POST["fechanacimiento"]) and !empty($_POST["exampleInputEmail1"]) and !empty($_POST["telefono"]) and !empty($_POST["usuario"]) and !empty($_POST["password"]) and !empty($_POST["conpassword"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $tipodocumento=$_POST["tipodocumento"];
        $documento=$_POST["documento"];
        $lugarnacimiento=$_POST["lugarnacimiento"];
        $fechanacimiento=$_POST["fechanacimiento"];
        $exampleInputEmail1=$_POST["exampleInputEmail1"];
        $telefono=$_POST["telefono"];
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conexion->query(" update persona set nombres='$nombre', apellidos='$apellidos', idtipodocumento=$tipodocumento, documento='$documento', lugarresidencia=$lugarnacimiento, fechanacimiento='$fechanacimiento', email='$exampleInputEmail1', telefono='$telefono', usuario='$usuario', password='$password' where id=$id ");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='aler alert-danger'>Error, no se ha podido modificar la persona</div>";
        }
        
    }else {
        echo "<div class='alert alert-warning'>Hay algunos campos vacios</div>";
    }
}
?>