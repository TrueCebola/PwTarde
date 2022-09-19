<?php include "cabecalho.php"; ?>

<div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">Clientes</div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <button class="btn btn-success">Novo Cliente</button>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="textoPesquisado"/>
            </div>
            <div class="col-2">
                <button class="btn btn-primary">Pesquisar</button>
            </div>
        </div>
    </div>
</div>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>CPF</th>
      <th>Endereço</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td>1</td>
      <td>João</td>
      <td>123.456.789-00</td>
      <td>Rua Asjhdh Ashdg</td>
      <td><a class="btn btn-warning">Editar</a></td>
      <td><a class="btn btn-danger">Excluir</a></td>
    </tr>
      <?php
      for($i=0;$i<10;$i++){
          ?>
  <tr>
      <td><?php echo $i?></td>
      <td>Nome<?php echo $i?></td>
      <td>CPF<?php echo $i?></td>
      <td>Rua<?php echo $i?></td>
      <td><a class="btn btn-warning">Editar</a></td>
      <td><a class="btn btn-danger">Excluir</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>

<?php include "rodape.php"; ?>