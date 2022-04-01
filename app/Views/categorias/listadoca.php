

<div class="container">
  <div class="card">
  <div class="card-header">
    Gastos
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Categoria</th>
      <th scope="col">Monto</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($datos as $dato): ?>
    <tr>
      <th scope="row"><?php  echo $dato['id']; ?></th>
      <td><?php  echo $dato['categoria']; ?></td>
      <td><?php  echo $dato['monto']; ?></td>
      <td><?php  echo $dato['fecha']; ?></td>
      <td><?php  echo $dato['descripcion']; ?></td>
    </tr>
    <tr>
    <?php endforeach; ?>  
  </tbody>
</table>
  <a href="<?= base_url('inicio/add1');?>" class="btn btn-success">Nuevo</a>
  
</div>



  </div>
</div>
  
  