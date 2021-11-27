

<?php

include '../banco/conecta.php';

include 'classes/cadastroproduto.class.php';

$objcadastroproduto = new cadastroproduto($bd);

include '../telas/header.php';



if(isset($_POST['excluir'])){

    $excluido = $objcadastroproduto->excluir($_POST['excluir']);

}

if(isset($_POST['editar'])){

    include '../telas/formProduto.php';
    include '../telas/footer.php';
       
}

$lista = $objcadastroproduto->listar();

include '../telas/lista.php';


//header('Location:../telas/lista.php');
