<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://usuario:d123456@basedatos.tdcsrym.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("basedatos");

    $tablaColeccion = $conexion->comentario;

    $resultado = $tablaColeccion->find();

    foreach($resultado as $r){
        $apellido = isset($r->apellido)?$r->apellido:"";
       echo $r->_id . " - " . $r->nombre  . " - " . $r->correo  . " - " . $r->mensaje . " - " . $apellido .  "<br>";
    }