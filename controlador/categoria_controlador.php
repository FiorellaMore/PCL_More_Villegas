<?php

include("../../controlador/config.php");
include("../../modelo/categoria.php");

class CategoriaControlador{

    public static function listar() {
        $categorias = Categoria::listar(); 

        include("../../vista/categorias/includes/tabla.php");
    }

    public static function agregar() {
        $nombre      = $_REQUEST['nombre'];
        $descripcion      = $_REQUEST['descripcion'];
        
        Categoria::agregar($nombre, $descripcion);
        
        header("location:../../vista/categorias/index.php");
    }

    public static function editar() {
        $idCategoria = $_REQUEST['idCategoria'];
        $nombre      = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
        
        Categoria::editar($idCategoria, $nombre, $descripcion);
        header("location:../../vista/categorias/index.php");
    }

    public static function eliminar() {
        $idCategoria = $_REQUEST['idCategoria'];

        Categoria::eliminar($idCategoria);
        
        header("location:../../vista/categorias/index.php");
    }
}
?>
