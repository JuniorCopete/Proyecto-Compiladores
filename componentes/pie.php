<footer class="footer mt-auto py-3 bg-light">
<div class="container">
<span class="text-muted">Pagina realizada para proyecto Universitario</span><button class="btn btn-outline-success" type="submit">Acerca de nosotros</button>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 

if ($pagina=="inicio") {include "conex/fun.php";}
 if ($pagina=="h" || $pagina=="registrar") {include "../conex/fun.php";}
#Esperando la funcion para registrar usuarios
if (isset($_POST["registrar"])) {
registrar_User($_POST["usuario"],$_POST["contraseña"],$_POST["correo"],$_POST["cedula"]);
	
}
//Esperando la funcion para validar usuarios 
if (isset($_POST["ingresar"])) {
	ingresar($_POST["usuario"],$_POST["contraseña"]);
	
}
#Esperando la funcion para registrar admin
if (isset($_POST["registrar-admin"])) {
registrar_admin($_POST["usuario"],$_POST["contraseña"],$_POST["correo"]);
	
}


?>
</html>