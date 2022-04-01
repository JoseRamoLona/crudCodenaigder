

<div class="container">
  <div class="card">
  <div class="card-header">
    Usuarios
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($datos as $dato): ?>
    <tr>
      <th scope="row"><?php  echo $dato['id_usuario']; ?></th>
      <td><?php  echo $dato['nombre']; ?></td>
      <td><?php  echo $dato['apellidos']; ?></td>
      <td><?php  echo $dato['email']; ?></td>
    </tr>
    <tr>
    <?php endforeach; ?>  
  </tbody>
</table>
  <a href="<?= base_url('inicio/add');?>" class="btn btn-success">Nuevo</a>
  
</div>



  </div>
</div>
  
  