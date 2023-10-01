<!DOCTYPE html>
<?php
require 'functions.php';
$permisos = ['Administrador','Profesor'];
permisos($permisos);
if(isset($_GET['id'])) {

    $id_grado = $_GET['id'];

/*
    $alumno = $conn->prepare("select * from alumnos where id = ".$id_alumno);
    $alumno->execute();
    $alumno = $alumno->fetch();

//consulta las secciones
    $secciones = $conn->prepare("select * from secciones");
    $secciones->execute();
    $secciones = $secciones->fetchAll();
*/
//consulta de grados
    $grado = $conn->prepare("select * from grados where id = ". $id_grado);
    $grado->execute();
    $grado = $grado->fetchAll();

}else{
    Die('Ha ocurrido un error');
}
?>
<html>
<head>
<title>Inicio | Registro de Notas</title>
    <meta name="description" content="Registro de Notas" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="header">
        <h1>Registro de Notas</h1>
        <h3>Usuario:  <?php echo $_SESSION["username"] ?></h3>
</div>
<nav>
    <ul>
        <li><a href="inicio.view.php">Inicio</a> </li>
        <li class="active"><a href="grados.view.php">Registro de Grados</a> </li>
        <li><a href="listadogrados.view.php">Listado de Grados</a> </li>

        <li class="right"><a href="logout.php">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
            <h4>Edición de Grados</h4>   
            <?php print $id_grado;
            
            var_dump ($grado);
            ?>
            <form method="post" class="form" action="procesargrado.php">
                <!--colocamos un campo oculto que tiene el id del grado-->
                <input type="hidden" value="<?php echo $grado['id']?>" name="id">
                <label>Nombres</label><br>
                <input type="text" required name="nombre" value="<?php echo $grado['nombre']?>" maxlength="45">
                <br>
                <label>Ciclo</label><br>
                <input type="text" required name="ciclo" value="<?php echo $grado['ciclo']?>" maxlength="45">
                <br><br>
              
                <button type="submit" name="modificar">Guardar Cambios</button> <a class="btn-link" href="listadogrados.view.php">Ver Listado</a>
                <br><br>
                <!--mostrando los mensajes que recibe a traves de los parametros en la url-->
                <?php
                if(isset($_GET['err']))
                    echo '<span class="error">Error al editar el registro</span>';
                if(isset($_GET['info']))
                    echo '<span class="success">Registro modificado correctamente!</span>';
                ?>

            </form>
        </div>
</div>

<footer>
    <p>Derechos reservados &copy; 2022</p>
</footer>

</body>

</html>