<?php

include 'banco/pdo.php';

include 'classes/disciplina.class.php';

$objDisciplina = new disciplina($bd);

include 'telas/header.php';

if(isset($_POST['apagar'])){

    $apagado = $objDisciplina->apagar($_POST['apagar']);
}

if(isset($_POST['criar'])){
    $criado = $objDisciplina->criar($_POST);
}

$lista = $objDisciplina -> listar();

include 'telas/lista.php';

include 'telas/footer.php';