<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="CSS/estilos.css">
<title>Inicio de sesión</title>
</head>

<body>
<div class="contenedor">
<form id="form1" name="form1" method="post" action="neg_evaluarsesion.php" autocomplete="off" class="form">
<div class="form-header"> 
		<h1 class="form-title">Muebles NGR</h1>
		<p>
		<h2 class="form-title">Iniciar Sesión</h2></div>
<h2 class="form-title">&nbsp;</h2>
	<label for="usuario" class="form-label">Nombre de Usuario:</label>
   	<input type="text" name="usuario" id="usuario" pattern="[a-zñA-ZÑáéíóú0-9 ]+" + required autocomplete="off" autofocus class="form-input" placeholder="Ingresa tu nombre de usuario">
	<label for="password" class="form-label">Contraseña:</label>            
    <input type="password" name="password" id="password" pattern="[a-zñA-ZÑáéíóú0-9 ]+" + required autocomplete="off" class="form-input" placeholder="Ingresa tu contraseña">
	<input type="submit" name="button" class="btn-submit" value="Iniciar Sesión">
	</div>
</body>
</html>