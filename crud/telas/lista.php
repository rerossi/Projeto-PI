<div>
    <a href="novo.php"><button class="btn btn-primary"> Nova Disciplina </button></a>
</div>
<div>
    <?php 
        if(isset($apagado)){
            if($apagado){
                echo ' <div class="alert alert-success" role="alert">
                Disciplina apagada com sucesso!
              </div>';
            }else{
                echo ' <div class="alert alert-primary" role="alert">
               Erro ao tentar apagar Disciplina!
              </div>';
            }
        }
    ?>
</div>

<form method="post" action="#">
    <table class="table">
        <thead> 
            <tr>
                <th>ID </th> <th> Nome</th> <th>Professor</th> <th>Dia</th><th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($lista as $id => $disciplina){
            ?>
            <tr>
                <td><?php echo $id ?> </td>
                <td><?= $disciplina['nome']; ?></td>
                <td><?=$disciplina['professor'] ?></td>
                <td><?=$disciplina['dia'] ?></td>
                <td><?=$disciplina['descricao'] ?></td>
                <td><button name="editar" class="btn btn-secondary"> Editar </button> </td>
                <td><button name="apagar" class="btn btn-danger" value="<?php echo $id ?>"> Apagar </button></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>