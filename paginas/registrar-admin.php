<?php 
$pagina = "registrar";
include '../componentes/cabeza.php';?>
<br><br>
<body>
	<br><br><br>
	<div class="container">
  <div class="row">
    <div class="col-sm">     
    </div>
    <div class="col-sm">
    	<h3>Registrar admin <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
</svg></h3>
<form class="was-validated" method="post" action="#"> <!-- formulario de registro de usuario -->
  <div class="mb-3">
    <input type="text" placeholder="Usuario" name="usuario" class="form-control" aria-label="file example" minlength="6" maxlength="10" required>
    <div class="invalid-feedback">Ingrese nombre de usuario min 6 caracteres maximo 10</div>
  </div>
  <div class="mb-3">
    <input type="password" placeholder="contraseña" name="contraseña" class="form-control" aria-label="file example" minlength="8" required>
    <div class="invalid-feedback">Ingrese contraseña minimo 8 caracteres</div>
  </div>
  <div class="mb-3">
    <input type="email" placeholder="ejemplo@correo" name="correo" class="form-control" aria-label="file example"  pattern=".+@(hotmail|gmail|outlook)\.(com|es)" size="40" required>
    <div class="invalid-feedback">Ingrese Correo electronico ejemplo@correo</div>
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit" name="registrar-admin">Registrarse</button>
  </div>
</form>
    </div>
    <div class="col-sm">
     
    </div>
  </div>
</div>
<?php include '../componentes/pie.php';?>
</body>
