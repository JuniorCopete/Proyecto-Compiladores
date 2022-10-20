<!DOCTYPE html>
<html>
<head>
	<title>Reservacion Tecnomecanica</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="shortcut icon" href="https://img2.freepng.es/20190614/fzh/kisspng-motorcycle-helmets-computer-icons-clip-art-motos-png-sorgusuna-uygun-resimleri-bedava-indir-5d034829eff992.9529295215604961699829.jpg">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<div class="container-fluid">
	<a class="navbar-brand" href="#">Tecnomecánica</a><img src="https://images.vexels.com/media/users/3/152376/isolated/preview/c5f4390c69b1c5113cec24502b46cc8e-icono-de-motocicleta-cl-sica.png" alt="" width="4%">
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a class="nav-link <?php if($pagina == "inicio"){echo("active");} ?>" aria-current="page" href="<?php if($pagina == "h" || $pagina == "registrar"){echo("../");} if($pagina == "inicio"){echo("#");} ?>">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($pagina == "h"){echo("active");} ?>" href="<?php if($pagina == "inicio"){echo("./paginas/horario");} if($pagina == "registrar"){echo("../paginas/horario");} if($pagina == "h"){echo("#");} ?>">Horarios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($pagina == "registrar"){echo("active");} ?>" href="<?php if($pagina == "h"){echo("../paginas/registrar");}  if($pagina == "inicio" ){echo("./paginas/registrar");} if($pagina == "registrar"){echo("#");} ?>">Registrarse</a>
				</li>
			</ul>
			<?php if ($pagina== "inicio") {
				echo '	<form class="d-flex" role="search" method="post" method="#">
			<input class="form-control" name="usuario" type="text" placeholder="Usuario" required=""><p></p>
			<input class="form-control" name="contraseña" type="password" placeholder="contraseña" required="">
			<button class="btn btn-outline-success" name="ingresar" type="submit">Ingresar</button>
		</form>';
			} ?>

	</div>
</div>
</nav>
</head>