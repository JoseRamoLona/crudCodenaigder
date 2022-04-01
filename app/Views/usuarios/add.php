

<div class="container">
  <div class="card">
  <div class="card-header">
    Registrate
  </div>
  <div class="card-body">
    <form action="<?= base_url('inicio/store')?>" method="Post">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingrese Nombre" name="nombre">
  </div>
  <div class="form-group">
    <label for="Apellido">Apellidos</label>
    <input type="text" class="form-control" id="apellido" placeholder="Ingrese Apellidos" name="apellido">
  </div>     
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com">
    <small id="email"  class="form-text text-muted">
      Nunca compartiremos su correo electrónico con nadie más. </small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
  </div>
    <input type="submit" name="guardar" value="Registrar" class="btn btn-success">
     <a href="<?= base_url('inicio/add');?>" class="btn btn-danger">Iniciar sesion </a>
  
</form>
 
</div>



  </div>
</div>
  
  