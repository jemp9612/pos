<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class AjaxUsuarios{

    // EDITAR USUARIOS  
    public $idUsuario;

    public function ajaxEditarUsuarios(){

        $item = "id";
        $valor = $this->idUsuario;

        $respuesta = ControladorUsuarios::ctrMostrarUsuario($item, $valor);

        echo json_encode($respuesta);

    }
}

//  EDITAR USUARIO

$editar = new AjaxUsuarios();
$editar -> idUsuario = $_POST["idUsuario"];
$editar -> ajaxEditarUsuarios();