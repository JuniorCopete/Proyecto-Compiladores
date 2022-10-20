<?php
session_start();
include 'bd.php';
 $nombre = $_SESSION['clientes'];
 if (!isset($nombre)) {
 	header("location: ../ss.html");
  session_destroy();
  die();
 }
$query = mysqli_query($bd,"SELECT * FROM usuario WHERE usuario = '".$nombre."'");
  $nr = mysqli_num_rows($query);
$query1 = mysqli_query($bd,"SELECT * FROM admin WHERE nombre = '".$nombre."'");
$nr1 = mysqli_num_rows($query1);

  if($nr == 1){
  


 echo '<script type="text/javascript">window.location.href="../paginas/usuario"</script>'; 
   
  }
  else if($nr1 == 1)
  {
     //header("Location: .php");
 echo '<script type="text/javascript">window.location.href="../paginas/principal"</script>';
 
  
  }