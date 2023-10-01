<!DOCTYPE html>
<?php
require 'functions.php';
$permisos = ['Administrador','Profesor','Padre'];
permisos($permisos);
?>
<html>
<head>
<title>Inicio | Registro de Notas</title>
    <meta name="description" content="Registro de Notas"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel=icon href='./img/logotipopal.png' sizes="32x32" type="image/png">
</head>
<body>
<div class="header">
        <h1>Registro de Notas</h1>
        <h3>Usuario: <?php echo $_SESSION["username"] ?></h3>
        <nav>
    <ul>
        <li class="active"><a href="inicio.view.php">Inicio</a> </li>
        <li><a href="alumnos.view.php">Registro de Alumnos</a> </li>
        <li><a href="listadoalumnos.view.php">Listado de Alumnos</a> </li>
        <li><a href="grados.view.php">Registro de Grados</a> </li>
        <li><a href="notas.view.php">Registro de Notas</a> </li>
        <li><a href="listadonotas.view.php">Consulta de Notas</a> </li>
        <li class="right"><a href="logout.php">Salir</a> </li>
    </ul>
</nav>
</div>
<div class="body">
    <div class="panel">
           <h1 class="text-center">Registro y Consulta de notas Estudiantiles y Academicas</h1>
        <?php
        if(isset($_GET['err'])){
            echo '<h3 class="error text-center">ERROR: Usuario no autorizado</h3>';
        }
        ?>
        <br>
        <hr>
        <p class="text-center"><strong> Direccion de Registro y Control Academico</strong><br></p>
        <br>
        </div>
</div>
<footer>
    
    <p>Derechos reservados &copy; 2022</p>

</footer>

</body>

</html>