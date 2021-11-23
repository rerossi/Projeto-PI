<?php

include '../banco/conecta.php';

if(isset($_POST['btn-edita'])){
    
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $descricao = $_POST['descricao'];
    $update = $_POST['update'];

    $query = "UPDATE produto SET titulo = '$titulo',
                                 categoria = '$categoria',
                                 preco = '$preco',
                                 modelo = '$modelo',
                                 marca = '$marca',
                                 descricao = '$descricao',
                                 update = '$update' WHERE titulo = '$titulo'";

    //$query_run = ()
};

