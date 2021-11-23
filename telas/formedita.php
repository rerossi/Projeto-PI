<?php
include 'header.php';
?>

<div class="modal fade" id="editmodal" tabindex = "-1" role="dialog" aria-labelledby="exampleModaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModaLabel"> Atualizar Produto </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close" > <spam aria-hidden="true">&times;</spam></button>
            </div>
        </div>
    </div>
</div>
<form class="needs-validation" novalidate method="post" action="update.php" enctype="multipart/form-data">

    <div class="modal-body">
        <section class="mb-3 ">
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo Produto" required>
        </section>

        <div class="mb-3">
            <select name="opcao" class="form-select" required>
                <option value=null> Categoria</option>
                <option value="eletronicos" id="eletronicos">Eletrônicos</option>
                <option value="esportes" id="esportes">Esportes</option>
                <option value="ferramentas" id="ferramentas">Ferramentas</option>
                <option value="games" id="games">Games</option>
                <option value="domestico" id="domestico">Utensílios Doméstico</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">R$</span>
            <input type="number" name="preco" id="preco" min="0" class="form-control" placeholder=" Valor diária" required>
            <span class="input-group-text">,00</span>
        </div>

        <div class="mb-3">
            <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Modelo" required>
            <div class="underline"> </div>
        </div>

        <div class="mb-3">
            <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca" required>
            <div class="underline"> </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Descrição</span>
            <textarea name="descricao" id="descricao" class="form-control" aria-label="With textarea" required></textarea>
        </div>


        <div class="input-group ">
            <input type="file" class="form-control" name="upload" id="upload" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
        </div>
  
    </div>

    <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary" data-dismiss="modal"  > Fechar </button>
        <button type="submit" name= "btn-edita" class="btn btn-primary" data-dismiss="modal"  > Atualiza </button>
    </div>
</form>