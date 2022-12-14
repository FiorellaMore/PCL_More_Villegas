<?php include("../../controlador/validacion_sesion.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <?php include('../includes/head.php') ?>
  </head>
  <body>
    <div class="app">
      <div class="app-content">
        <?php include('../includes/navbarAdmin.php') ?>
        <div class="container px-4">
          <div class="py-4 bd-highlight row">
            <div class="title-proveedores py-2">
                <h2>Empleados</h2>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                  data-bs-target="#agregar">Agregar</button>
              </div>
            </div>
          </div> 
          <?php include("../../controlador/empleados/listar.php"); ?>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
