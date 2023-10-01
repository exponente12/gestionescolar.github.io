<?php
if(!$_POST){
    header('location: grados.view.php');
}
else {
    //incluimos el archivo funciones que tiene la conexion
    require 'functions.php';
    //Recuperamos los valores que vamos a llenar en la BD
    $nombre = htmlentities($_POST ['nombre']);
    $ciclo = htmlentities($_POST ['ciclo']);
    


    //insertar es el nombre del boton guardar que esta en el archivo grados.view.php
    if (isset($_POST['insertar'])){

        $result = $conn->query("insert into grados (nombre, ciclo) values ('$nombre', '$ciclo')");
        if (isset($result)) {
            header('location:grados.view.php?info=1');
        } else {
            header('location:grados.view.php?err=1');
        }// validación de registro

    //sino boton modificar que esta en el archivo gradoedit.view.php
    }else if (isset($_POST['modificar'])) {
        //capturamos el id grado a modificar
            $id_grado = htmlentities($_POST['id']);


            $result = $conn->query("update grados set nombre = '$nombre', ciclo = '$ciclo', id = '$id' where id = " . $id);
            if (isset($result)) {
                header('location:gradoedit.view.php?id=' . $id_grado . '&info=1');
            } else {
                header('location:gradoedit.view.php?id=' . $id_grado . '&err=1');
            }// validación de registro
    }

}

