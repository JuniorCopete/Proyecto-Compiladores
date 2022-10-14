<?php 
$pagina = "registrar";
include '../componentes/cabeza.php';?>
<br><br>
<body>
	<br>
      <br>
      <br>
	<div class="container">
  <div class="row">
    <div class="col-sm">     
    </div>
    <div class="col-sm">
    	<h3>Registrese <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
</svg></h3>
    <form class="was-validated"> 
  <div class="mb-3">
    <input type="text" placeholder="Usuario" class="form-control" aria-label="file example" required>
    <div class="invalid-feedback">Ingrese nombre de usuario</div>
  </div>
  <div class="mb-3">
    <input type="password" placeholder="Contraseña" class="form-control" aria-label="file example" required>
    <div class="invalid-feedback">Ingrese contraseña</div>
  </div>
  <div class="mb-3">
    <input type="number" placeholder="N° CC" class="form-control" aria-label="file example" required>
    <div class="invalid-feedback">Ingrese Numero de CC.</div>
  </div>
   <div class="mb-3">
    <select class="form-select" required aria-label="select example">
      <option value="">Elige la marca de tu moto</option>
      <option value="1">Moto 1</option>
      <option value="2">Moto 2</option>
      <option value="3">Moto 3</option>
    </select>
    <div class="invalid-feedback">Ejemplo de select feedback no válido</div>
  </div>

    <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
    <label class="form-check-label" for="validationFormCheck1">Aceptas todos los terminos</label>
    <div class="invalid-feedback">Marca antes de continuar</div>
  </div>


  <div class="mb-3">
    <button class="btn btn-primary" type="submit">Enviar formulario</button>
  </div>
</form>
    </div>
    <div class="col-sm">
     
    </div>
  </div>
</div>



	




</body>
<?php include '../componentes/pie.php';?>