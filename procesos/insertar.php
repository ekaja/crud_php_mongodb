<?php 
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new Crud();

    $datos = array(
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "nombre" => $_POST['nombre'],
        "fecha_nacimiento" => $_POST['fechaNacimiento']
    );

    $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        header("location:../index.php"); 
    } else {
        print_r($respuesta);
    }
?>