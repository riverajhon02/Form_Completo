<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="alert/dist/sweetalert2.css">
    <title>Document</title>
</head>
<body>

  <div class="row">
    <div class="col-lg-4">
    <?php
    if(isset($_GET['code'])){
      if($_GET['code']==0){
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>No se han cargado los datos!</strong> Campos sin rellenar.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php
          }else if($_GET['code']==1){
          ?>  
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Excelente!</strong> Se cargaron los datos con exito!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            
    <?php
          }

    }
  ?> 

    </div>
  </div>

  <form id="msform" action="registro2.php" method="POST" >
 
  <fieldset>
    <h2 class="fs-title">Creando tu cuenta</h2>
    <h3 class="fs-subtitle">Paso 1</h3>
   <div class="row">
     <div class="col">
      <input type="number" id="ced" name="ident"  placeholder="Identificación"  />
     </div>
   </div>
    <div class="row">
      <div class="col">
        <input type="text" name="nombre1" class="form-control" placeholder="Primer nombre" required autocomplete="off" pattern="[A-Za-z]+" maxlength="20">
      </div>
      <div class="col">
        <input type="text" name="nombre2" class="form-control" placeholder="Segundo nombre"  required autocomplete="off" pattern="[A-Za-z]+" maxlength="20">
      </div>
    </div>
   
    <div class="row">
      <div class="col">
        <input type="text" name="apellido1" class="form-control" placeholder="Primer apellido"  maxlength="20" required >
      </div>
      <div class="col">
        <input type="text" name="apellido2" class="form-control" placeholder="Segundo apellido" maxlength="20">
      </div>
    </div>

    <div class="row" id="radio">
      
      <div class="col custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="F">
        <label class="custom-control-label" for="customRadioInline1">Masculino</label>
      </div>
      <div class="col custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="M" required>
        <label class="custom-control-label" for="customRadioInline2">Femenino</label>
      </div>
      <div class="col custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input" value="O">
        <label class="custom-control-label" for="customRadioInline3">Otro</label>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label class="sr-only" for="inlineFormInputGroup">Nombre usuario</label>
       <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text" id="a">@</div>
        </div>
        <input type="text" name="usuario" class="form-control" id="inlineFormInputGroup" placeholder="Username" required>
      </div>
      </div>
     
    </div>

    <div class="row">
      <div class="col">
        <input type="number" name="cel" class="form-control" placeholder="Celular" maxlength="11" required >
      </div>
      <div class="col">
        <input type="tel" name="tel" class="form-control" placeholder="Telefono fijo" maxlength="7">
      </div>
      <div class="col">
        <input type="number" name="fax" class="form-control" placeholder="Fax">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <input type="text" name="ciudad" class="form-control" placeholder="Ciudad"  required autocomplete="off" pattern="[A-Za-z]+" maxlength="20" >
      </div>
      <div class="col">
        <input type="number" name="codP" class="form-control" placeholder="Codigo postal" required autocomplete="off" required maxlength="6">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <input type="email" name="correo" class="form-control" placeholder="Correo electronico" required >
      </div>
    </div>
    
    <div class="row">
      <div class="col"> <input name="btn" type="submit" class="btn btn-dark text-white" value="Guardar"></div>
      
    </div>

    
   
  </fieldset>

  

 
  </form>
  
  <script src='jquery-3.3.1.min.js'></script>
  <script src="alert/dist/sweetalert2.min.js"></script>
  <script src="bootstrap.min.js"></script>
  
  



</body>
</html>
