<?php

include ('../modelo/mascota.php');


$mascota = new mascotas("", "", ""); 

if (isset($_POST['nombre']) && isset($_POST['raza'])) {
    $mascota->guardar();
    header("Location: ../vista/index.php"); 
    exit;
}

// if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['raza'])) {
// 	$id=$_POST['id'];
//     $nombre=$_POST['nombre'];
//     $raza=$_POST['raza'];
//     $mascota->actualizar();
//     header("Location: ../vista/index.php"); 
//     exit;
// }


if (isset($_POST['eliminar'])) {
    $mascota->eliminar();
    header("Location: ../vista/index.php"); 
    exit; 
}

$datosMascota = $mascota->listar();

echo json_encode($datosMascota);



?>