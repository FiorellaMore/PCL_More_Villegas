<?php include("../../controlador/validacion_sesion.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta</title>
    <?php include('../includes/head.php') ?>
</head>

<body>

    <div class="app position-relative">
        <div class="app-content">
            <?php include('../includes/navbarVend.php') ?>
            <div class="container px-4 ">
                <div class="py-4 bd-highlight row">
                    <div class="title-proveedores py-2">
                        <h2>Ventas</h2>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#agregarVenta">Agregar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                <?php include("../../controlador/venta/listar.php"); ?>
                <?php include("./includes/enviar_correo.php") ?>
                </div>
            </div>
        </div>

            <button type="button" class="btn btn-info rounded-3  position-absolute bottom-0 end-0 mx-5 my-3"
                    data-bs-toggle="modal"
                    data-bs-target="#newemail"
                    data-bs-placement="top"
                    title="Nuevo pedido"
            >
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1.5rem" width="1.5rem" xmlns="http://www.w3.org/2000/svg"><path fill="transparent" stroke="currentColor" stroke-width="2" d="M22,3 L2,11 L20.5,19 L22,3 Z M10,20.5 L13,16 M15.5,9.5 L9,14 L9.85884537,20.0119176 C9.93680292,20.5576204 10.0751625,20.5490248 10.1651297,20.009222 L11,15 L15.5,9.5 Z"></path></svg>
            </button>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</html>