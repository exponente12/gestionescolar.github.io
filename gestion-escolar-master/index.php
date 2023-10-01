<?php
//arreglo con mensajes que puede recibir
$messages = [
    "1" => "Credenciales incorrectas",
    "2" => "No ha iniciado sesión"
];
?>
<!DOCTYPE html>
<html>
<head>
<title>Login | Registro de Notas</title>
    <meta name="description" content="Registro y Consultas de Notas Estudiantiles y Academicas" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel=icon href='./img/logotipopal.png' sizes="32x32" type="image/png">

    

</head>
<body>
<header class="header">

        <h1>Registro y Consultas de Notas Estudiantiles y Academicas</h1>

        <div class="top-left" id="top">
			<div class="top-header">
				<!--<img src="http://localhost/grupo5/img/gobierno.png" style="width: 90px;margin-bottom: -40px"; alt=""/> -->
			</div>

			<div class="logotipo">
				<!--<img src="http://localhost/grupo5/img/logotipopal.png" style="width: 250px;" alt=""/>-->
			</div>

			<div class="letras_logotipo">
				<img src="http://localhost/grupo5/img/ministeriologo.png" style="width: 200px;margin-bottom: -5px;" alt=""/>
			</div>

</div>
</header>
<main class="body">
    <div class="panel-login">
            <h4>Inicio de Sesion</h4>
            <form method="post" class="form" action="login_post.php">
                <label>Usuario</label><br>
                <input type="text" name="username">
                <br>
                <label>Contraseña</label><br>
                <input type="password" name="password">
                <br><br>
                <button type="submit">Entrar</button>
            </form>
        <?php
        if(isset($_GET['err']) && is_numeric($_GET['err']) && $_GET['err'] > 0 && $_GET['err'] < 3 )
            echo '<span class="error">'.$messages[$_GET['err']].'</span>';
        ?>
        </div>
</main>

<footer>
    <p>Derechos reservados &copy; 2022</p>
</footer>

</body>

</html>