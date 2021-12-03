<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include '../banco/conecta.php';

include 'classes/cadastroproduto.class.php';

$objcadastroproduto = new cadastroproduto($bd);

include '../telas/header.php';
//include '../telas/navbar.php';

if (isset($_POST['excluir'])) {

    $excluido = $objcadastroproduto->excluir($_POST['excluir']);
}

if (isset($_POST['editar'])) {

    $id = ($_POST['editar']);
    $d = $objcadastroproduto->listar($_POST['editar']);

    $produto = $d[$_POST['editar']];

    include '../telas/formEdita.php';
    die;
}

if (isset($_POST['id'])) { //Se existir o $_POST['id'] que vem do form de edição, faça

    if (is_numeric($_POST['id'])) { //Verifique se é numérico

        //Salve a alteração
        $alterado = $objcadastroproduto->salvar($_POST);
    }
}


$lista = $objcadastroproduto->listar();

include '../telas/lista.php';
