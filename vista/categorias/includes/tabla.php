<div class="card">
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($categorias as $categoria) { ?>
                    <tr>
                        <td><?php echo $categoria->id; ?></td>
                        <td><?php echo $categoria->nombre; ?></td>
                        <td><?php echo $categoria->descripcion; ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-secondary me-2" type="button" data-bs-toggle="modal" data-bs-target="#editarCat<?php echo $categoria->id; ?>">
                                    Editar
                                </button>
                                <!--Ventana Modal para Actualizar--->
                                <?php include("../../vista/categorias/includes/editar_modal.php") ?>
                                
                                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#eliminarCat<?php echo $categoria->id; ?>">Eliminar</button>
                                <!--Ventana Modal para la Alerta de Eliminar--->
                                <?php include("../../vista/categorias/includes/eliminar_modal.php") ?>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
