<?php 
function registrar_User($user,$contra,$corre,$id)//funcion para registrar usuario
{

if (isset($_POST["registrar"])) {
	

$nombre = $user;
$contraseña = hash('sha512',$contra);
$correo = $corre;
$cc = $id;
$sql = "SELECT * from usuario where cc='$cc' || usuario='$nombre'";
include '../conex/bd.php';
$resul=mysqli_query($bd,$sql);
if (mysqli_num_rows($resul)> 0) {
	echo "<script type='text/javascript'>
Swal.fire({
  title: 'Error!',
  text: 'Este usuario ya está registrado, intente con otro',
  icon: 'error',
  confirmButtonText: 'OK'
})
 </script>";
 die();

}else{

$consulta = "INSERT INTO usuario(usuario,correo,contraseña,cc) values('$nombre','$correo','$contraseña','$cc')";
 mysqli_query($bd,$consulta);
 mysqli_close($bd);

 echo "<script type='text/javascript'>
Swal.fire(
  'Usuario creado correctamente',
  '$nombre Ingresa en la barra de arriba de la pagina',
  'success'
)
 </script>";

}
	
}
}

function ingresar($user,$contraseña){
   
  if (isset($_POST["ingresar"])) {

$nombre = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña);
include 'conex/bd.php';
$query = mysqli_query($bd,"SELECT * FROM usuario WHERE usuario = '".$nombre."' and contraseña = '".$contraseña."'");
  $nr = mysqli_num_rows($query);
$query1 = mysqli_query($bd,"SELECT * FROM admin WHERE nombre = '".$nombre."' and contraseña = '".$contraseña."'");
$nr1 = mysqli_num_rows($query1);

  if($nr == 1 || $nr1 == 1){
  
    $_SESSION['clientes'] = $nombre;

    echo "<script type='text/javascript'>
Swal.fire({
  title: 'Bienvenido',
  text: 'Quiero que tengas una agradable experiencia hoy',
  imageUrl: 'https://png.pngtree.com/png-clipart/20210714/ourlarge/pngtree-motorcycle-silhouette-domineering-freedom-png-image_3589465.jpg',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
});
 </script>";
//header("Location: ss.html");
 echo '<script type="text/javascript">window.location.href="conex/acceso"</script>';
    die();
  }
  else if($nr == 0 || $nr1 == 0)
  {
     //header("Location: .php");
    echo "<script type='text/javascript'>
Swal.fire({
  title: 'Error!',
  text: 'Nombre o contraseña incorrecto',
  icon: 'error',
  confirmButtonText: 'OK'
})
 </script>";
 die();
  
  }
}
}

function registrar_admin($user,$contra,$corre)//funcion para registrar admin
{

if (isset($_POST["registrar-admin"])) {
  

$nombre = $user;
$contraseña = hash('sha512',$contra);
$correo = $corre;
$sql = "SELECT * from admin where nombre='$nombre'";
include '../conex/bd.php';
$resul=mysqli_query($bd,$sql);
if (mysqli_num_rows($resul)> 0) {
  echo "<script type='text/javascript'>
Swal.fire({
  title: 'Error!',
  text: 'Este usuario ya está registrado, intente con otro',
  icon: 'error',
  confirmButtonText: 'OK'
})
 </script>";
 die();

}else{

$consulta = "INSERT INTO admin(nombre,contraseña,correo) values('$nombre','$contraseña','$correo')";
 mysqli_query($bd,$consulta);
 mysqli_close($bd);

 echo "<script type='text/javascript'>
Swal.fire(
  'Usuario creado correctamente',
  '$nombre Ingresa en la barra de arriba de la pagina',
  'success'
)
 </script>";

}
  
}
}

function cerrar_sesion($cerrar){
  if ($cerrar == $_REQUEST["cerrar-sesion"]) {
    session_destroy();
     echo '<script type="text/javascript">window.location.href="../"</script>';
    die();
  }

}