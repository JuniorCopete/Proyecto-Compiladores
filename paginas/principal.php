<?php 
session_start();
include '../conex/bd.php';
 $nombre = $_SESSION['clientes'];
 if (!isset($nombre)) {
 	header("location: ../");
  session_destroy();
  die();
 }
$query1 = mysqli_query($bd,"SELECT * FROM admin WHERE nombre = '".$nombre."'");
$nr1 = mysqli_num_rows($query1);
if($nr1 == 0){header("location: ../");}
  //traigo la funcion cerrar sesion
 include '../conex/fun.php';
 include '../componentes/barra.php';
 if (isset($_REQUEST["cerrar-sesion"])) {cerrar_sesion($_REQUEST["cerrar-sesion"]);}
?>
<div class="container">
  <div class="row">
    <div class="col-4" id="hola">
      <h4><img src="https://e7.pngegg.com/pngimages/180/801/png-clipart-brand-product-design-logo-line-customer-retention-angle-text.png" width="40" height="40">Clientes</h4>
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">correo</th>
      <th scope="col">opciones</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>mama11</td>
      <td>junior@hotmail.com</td>
      <td><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-paper-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.5 9.5 3 7.5v-6A1.5 1.5 0 0 1 4.5 0h7A1.5 1.5 0 0 1 13 1.5v6l-3.5 2L8 8.75l-1.5.75ZM1.059 3.635 2 3.133v3.753L0 5.713V5.4a2 2 0 0 1 1.059-1.765ZM16 5.713l-2 1.173V3.133l.941.502A2 2 0 0 1 16 5.4v.313Zm0 1.16-5.693 3.337L16 13.372v-6.5Zm-8 3.199 7.941 4.412A2 2 0 0 1 14 16H2a2 2 0 0 1-1.941-1.516L8 10.072Zm-8 3.3 5.693-3.162L0 6.873v6.5Z"/>
</svg></a></td>
<td> <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></td>
  </tbody>
</table>
    </div>
    <div class="col-5" id="hola">
      <h4><img src="https://cdn-icons-png.flaticon.com/512/1713/1713277.png" width="40" height="40">Administrar</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, voluptate, recusandae numquam accusantium quam eos alias atque facilis consectetur, nulla iste dignissimos, architecto beatae! Voluptate laudantium dicta excepturi quisquam ratione?Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptate itaque ullam. Delectus accusantium labore saepe omnis deserunt eligendi dolorum, minima doloribus inventore debitis voluptates suscipit dicta consequuntur vero enim.</p>
    </div>
    <div class="col-3">
      <h4><img src="https://cdn-icons-png.flaticon.com/512/345/345589.png" width="40" height="40">Publicar</h4>
    </div>
    </div>
    
  </div>
</div>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php include '../msg/msg-bienvenida.php';?>
</body>
</html>
