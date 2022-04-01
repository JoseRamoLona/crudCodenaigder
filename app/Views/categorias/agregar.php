

<div class="container">
  <div class="card">
  <div class="card-header">
    Registra tus gastos
  </div>
  <div class="card-body">
    <form action="<?= base_url('inicio/store')?>" method="Post">
  <div class="form-group">
    <h4>Categorias: Salud, Alimentacion, Vestimenta, Transporte, Entretenimiento</h4>
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" id="categoria" placeholder="Ingresa una categoria" name="categoria">
  </div>
  <div class="form-group">
    <label for="monto">Monto:</label>
    <input type="text" class="form-control" id="monto" placeholder="$" name="monto">
  </div>     
  <div class="form-group">
    <label for="fecha">Fecha:</label>
    <input type="date" class="form-control" id="fecha" placeholder="" name="fecha">
  </div>    
  <div class="form-group">
    <label for="descricion">Descripcion</label>
    <textarea class="form-control" id="descricion" name="descripcion" rows="3"></textarea>
  </div>
    <input type="submit" name="guardar" value="Registrar" class="btn btn-success">
    <!-- <a href="<?= base_url('inicio/add');?>" class="btn btn-danger">Iniciar sesion </a>-->
  
</form>
 
</div>



  </div>
</div>
  
  