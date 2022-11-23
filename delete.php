<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://usuario:d123456@basedatos.tdcsrym.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("basedatos");
    
    $tablaColeccion = $conexion->comentario;

    $resultados = $tablaColeccion->deleteOne(["_id"=> new MongoDB\BSON\ObjectId($_GET["id"])]);
    echo "Registros eliminados ". $resultados->getDeletedCount();
