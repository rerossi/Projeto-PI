<main> 

<div> 
        <a href = "../telas/formProduto.html"> <button class="btn btn-primary"> Butaun </button> </a>
</div>
    <section class="container,  fundo">
        <h2> Meus Produtos </h2>
            <form method="post" action="">
                <table class="table ">
                    <thead >
                        <tr >
                            <th>Titulo</th><th>Categoria</th><th>Preço</th><th>Modelo</th><th>Marca</th><th>Descrição</th><th>Imagem</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                    foreach($lista as $id => $cadastroproduto){
                    ?>    
                    <tr>
                    <td><b><?php echo $cadastroproduto['titulo']; ?></b></td>
                    <td><?php echo $cadastroproduto['categoria']; ?></td>
                    <td><?php echo $cadastroproduto['preco']; ?></td>
                    <td><?php echo $cadastroproduto['modelo']; ?></td>
                    <td><?php echo $cadastroproduto['marca']; ?></td>
                    <td><?php echo $cadastroproduto['descricao']; ?></td>
                    <td><?php ?></td>
                    <td><button name="editar" class="btn btn-success my-2">Editar</button></td>
                    <td><button name="excluir" class="btn btn-danger my-2" value="<?php echo $id; ?>">Excluir</button></td>
                    </tr>

                    <?php
                    }
                    ?>
                </tbody> 
                
            </form>
        </section>
</main>

