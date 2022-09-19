<?php include "cabecalho.php"; ?>

<div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">Produtos</div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <button class="btn btn-success">Novo Produto</button>
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
      <th>Marca</th>
      <th>Modelo</th>
      <th>Quantidade</th>
      <th>Preço</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td>1</td>
      <td>NVIDIA</td>
      <td>Geforce RTX 4090Ti Super 64GB</td>
      <td>1</td>
      <td>R$20.000,00</td>
      <td><a class="btn btn-warning">Editar</a></td>
      <td><a class="btn btn-danger">Excluir</a></td>
    </tr>
      <?php
      for($i=0;$i<10;$i++){
          ?>
  <tr>
      <td><?php echo $i?></td>
      <td>Marca<?php echo $i?></td>
      <td>Modelo<?php echo $i?></td>
      <td><?php echo $i?></td>
      <td>R$<?php echo $i?>,00</td>
      <td><a class="btn btn-warning">Editar</a></td>
      <td><a class="btn btn-danger">Excluir</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>

<?php include "rodape.php"; ?>