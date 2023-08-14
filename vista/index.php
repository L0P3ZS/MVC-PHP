<?php
include('../Controlador/appController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Nuevo
        </button>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form   method="post" id="formulario">
                    <div class="modal-data">
                            <input type="hidden" id="id" name="id" >
                        </div>
                        <div class="modal-data">
                            <label for="name">Nombre:</label>
                            <input type="text" id="nombre" name="nombre">
                        </div>
                        <div class="modal-data">
                            <label for="lastname">Raza:</label>
                            <input type="text" id="raza"  name="raza">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="guardar">Crear</button>
                    <button  class="btn btn-warning " id="actualizar"  >actualizar</button>
                </div>
                </form>
            </div>
        </div> 
    </div>

    <!-- Tabla para mostrar Usuarios registrados -->
    <div class="container mt-4">
        <table class="table" id="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datosMascota as $mascota) : ?>
                    <tr>
                        <td scope="row" ><?= $mascota['id'] ?></td>
                        <td ><?= $mascota['nombre'] ?></td>
                        <td ><?= $mascota['raza'] ?></td>
                        <th><button class="btn btn-outline-warning boton"  data-bs-toggle="modal" data-bs-target="#myModal" >actualizar</button></th>
                        <th>
                            <form action="../Controlador/appController.php" method="post">
                                <input type="hidden" name="id" value="<?= $mascota['id'] ?>">
                                <button type="submit" class="btn btn-outline-danger" name="eliminar">eliminar</button>
                            </form>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
<div id="respuesta"></div>


   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <script src="../js/jscript.js"></script>
</body>


</html>