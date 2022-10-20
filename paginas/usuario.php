<?php 
session_start();
include '../conex/bd.php';
 $nombre = $_SESSION['clientes'];
 if (!isset($nombre)) {
 	header("location: ../");
  session_destroy();
  die();
 }
$query1 = mysqli_query($bd,"SELECT * FROM usuario WHERE usuario = '".$nombre."'");
$nr1 = mysqli_num_rows($query1);
  if($nr1 == 0){  header("location: ../");}
 //traigo la funcion cerrar sesion
 include '../conex/fun.php';
 include '../componentes/barra.php';
 
 if (isset($_REQUEST["cerrar-sesion"])) { cerrar_sesion($_REQUEST["cerrar-sesion"]);}
?>
<div class="container">
  <div class="row">
    <div class="col-4" id="hola">
      <h4><img src="https://i.pinimg.com/originals/78/80/91/788091df7e348c9a6fb0bcb66bded279.png" width="40" height="40">Noticias</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, voluptate, recusandae numquam accusantium quam eos alias atque facilis consectetur, nulla iste dignissimos, architecto beatae! Voluptate laudantium dicta excepturi quisquam ratione?Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptate itaque ullam. Delectus accusantium labore saepe omnis deserunt eligendi dolorum, minima doloribus inventore debitis voluptates suscipit dicta consequuntur vero enim. Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Atque quae voluptate molestiae tempora itaque necessitatibus aspernatur obcaecati aut eveniet voluptas quasi, ad esse et omnis. Distinctio exercitationem necessitatibus cupiditate repellendus. Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Mollitia quaerat, dolor iste molestias. Cupiditate, aut ab ea expedita. Eius, obcaecati sit? Aliquam, ad autem quibusdam perspiciatis ratione hic sequi explicabo. Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Quaerat consectetur, quod libero laboriosam excepturi quam quas ab. Saepe et tenetur reprehenderit culpa minus rerum inventore obcaecati, quo repellendus. Mollitia, ab! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus ex, ut saepe consequatur minus reiciendis, quia eum necessitatibus molestias distinctio perspiciatis corrupti nihil quas a eos doloremque sequi dolores. Aperiam.</p>
    </div>
    <div class="col-5" id="hola">
      <h4><img src="https://cdn-icons-png.flaticon.com/512/942/942759.png" width="40" height="40">Pedir citas</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, voluptate, recusandae numquam accusantium quam eos alias atque facilis consectetur, nulla iste dignissimos, architecto beatae! Voluptate laudantium dicta excepturi quisquam ratione?Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptate itaque ullam. Delectus accusantium labore saepe omnis deserunt eligendi dolorum, minima doloribus inventore debitis voluptates suscipit dicta consequuntur vero enim. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima aliquam recusandae aperiam, voluptatum officia autem rerum error corporis commodi temporibus vel veniam ratione rem sint nihil sequi. Voluptatum reiciendis, iure! Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eius deleniti quis ipsa dignissimos dolorum incidunt est nulla, repellendus iste consequatur, inventore assumenda. Quam voluptatem nam magnam, eius ratione error perspiciatis! Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Quia, esse. Maxime nam quisquam minima sunt nisi autem libero beatae velit nesciunt sit culpa nulla ullam, debitis! Sapiente, magnam! Assumenda, eius.</p>
    </div>
    <div class="col-3" id="dif">
      <h4><img src="https://www.clipartmax.com/png/middle/103-1036952_recordatorio-icono-gratis-icon.png" width="40" height="40">Recordatorios</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Illum natus, dolor animi ipsam nemo ullam esse quae, molestiae expedita sunt, qui? Adipisci, iure odio nesciunt accusamus quibusdam consequatur ratione culpa. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, labore optio! Nemo itaque fuga aliquam incidunt nobis delectus repellendus, nihil eligendi explicabo sunt ex atque ullam a, blanditiis vitae dolores. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt alias cumque tempora perferendis facilis earum nihil totam voluptatum suscipit, similique non porro quod consectetur, beatae odio atque adipisci quos, quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum possimus, ipsa provident, aperiam dolor nemo minus dolores cupiditate itaque impedit voluptatum. Recusandae quaerat pariatur perspiciatis suscipit neque soluta numquam sint? Lorem ipsum dolor sit amet consectetur adipisicing, elit. Dicta dolor natus nam consectetur molestias. Sapiente nisi nemo natus, et ad hic quaerat quidem repudiandae consequatur architecto quis dolore .</p>
    </div>
    </div>
    
  </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php include '../msg/msg-bienvenida.php';?>
</body>
</html>