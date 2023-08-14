<?php

include ('../modelo/mascota.php');

if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['raza'])) {
    
    $nombre = $_POST['nombre'];
    $raza = $_POST['raza'];

    $mascota = new mascotas($id, $nombre, $raza);
    $mascota->actualizar();

    
}
?>