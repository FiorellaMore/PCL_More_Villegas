<?php 
include("../../controlador/config.php");

class Rol {
    public $id;
    public $nombre;

    function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public static function listar() {
        global $link;
        $roles = [];
        $consulta  = ("SELECT * FROM mor_rol");
        $resultado = mysqli_query($link, $consulta);
        while ($valor = mysqli_fetch_assoc($resultado)){ 
            $roles[] = new Rol($valor['idRol'], $valor['nombre']);
        }
        return $roles;
    } 

    public static function agregar($nombre){
        global $link; 
        $consulta = ("INSERT INTO mor_rol(
            nombre
        )
        VALUES (
            '" . $nombre . "'
        )");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }

    public static function editar($id, $nombre) {
        global $link; 
        $consulta = ("UPDATE mor_rol
            SET
            nombre      = '" . $nombre . "'
            WHERE idRol = '" . $id . "'
        ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
    
    public static function eliminar($id) {
        global $link; 
        $consulta = ("DELETE FROM mor_rol WHERE idRol= '" . $id . "' ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
}
?>
