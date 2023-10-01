<?php
require 'functions.php';

$permisos = ['Administrador','Profesor'];
permisos($permisos);
//consulta los alumnos para el listaddo de alumnos
$grados = $conn->prepare("select * from grados ");
$grados->execute();
$grados = $grados->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
<title>Listado de Alumnos | Registro de Notas</title>
    <meta name="description" content="Registro de Notas del Centro Escolar" />
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
        <li><a href="grados.view.php">Registro de Grados</a> </li>
        <li class="active"><a href="listadogrados.view.php">Listado de Grados</a> </li>
        <!-- <li><a href="notas.view.php">Registro de Notas</a> </li> -->
        <!-- <li><a href="listadonotas.view.php">Consulta de Notas</a> </li> -->
        <li class="right"><a href="logout.php">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
    
            <h4>Listado de Grados</h4>
            <table class="table" cellspacing="0" cellpadding="0">
                <tr>
                    <th>No de<br>id</th><th>Grado</th>
                    <th>Seccion</th>
                    <th>Editar</th><th>Eliminar</th>
                <?php foreach ($grados as $grado) :?>
                <tr>
                    <td align="center"><?php echo $grado['id'] ?></td>
                    <td><?php echo $grado['nombre'] ?></td>
                    <td><?php echo $grado['ciclo'] ?></td>
                    

                    <td><a href="gradoedit.view.php?id=<?php echo $grado['id'] ?>">Editar</a> </td>
                    <td><a href="gradodelete.php?id=<?php echo $grado['id'] ?>">Eliminar</a> </td>
                </tr>
                <?php endforeach;?>
            </table>
                <br><br>

                <a class="btn-link" href="grados.view.php">Agregar Grado</a>
                <br><br>
                <!--mostrando los mensajes que recibe a traves de los parametros en la url-->
                <?php
                if(isset($_GET['err']))
                    echo '<span class="error">Error al almacenar el registro</span>';
                if(isset($_GET['info']))
                    echo '<span class="success">Registro almacenado correctamente!</span>';
                ?>


        </div>
</div>

<footer>
    <p>Derechos reservados &copy; 2022</p>
</footer>

</body>

</html>