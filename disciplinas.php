<?php include "cabecalho.php"; ?>

<?php
    if(isset($_GET["pesquisa"])&&!empty($_GET["pesquisa"])){
        $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas/busca/".$_GET["pesquisa"]);
        $dados = json_decode($dados,true);
    }else{
        //Traz conteudo da url
        $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas");
        //Transforma JSON em array associativo
        $dados = json_decode($dados,true);
    }
    
    // echo "<pre>";
    // print_r($dados);
    // echo "</pre>";
?>

<div class="row">
    <div class="col-10 offset-1">
        <div class="card mt-3">
            <div class="card-header">Pesquisar Disciplinas</div>
            <div class="card-body">
                <form action="./disciplinas.php" method="get">
                    <div class="row">
                        <div class="col-2">
                            <a href="" class="btn btn-success">Nova Disciplina</a>
                        </div>
                        <div class="col-4">
                            <input type="text" name="pesquisa" class="form-control"/>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Sigla</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i=0;$i<count($dados);$i++){
                ?>
            <tr>
                <td><?php echo $dados[$i]["disciplinaId"]; ?></td>
                <td><?php echo $dados[$i]["nome"]; ?></td>
                <td><?php echo $dados[$i]["apelido"]; ?></td>
                <td><?php echo $dados[$i]["sigla"]; ?></td>
                <td>
                    <a href="./editar_disciplina.php?id=<?php echo $dados[$i]["disciplinaId"]; ?>" class="btn btn-warning">
                        Editar
                    </a>
                </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "rodape.php"; ?>