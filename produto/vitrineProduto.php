<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../telas/header.php';
include '../telas/navbar.php';
?>

<link rel="stylesheet" href="../css/vitrineProduto.css">

<main class="pt-5 pb-5">

    <?php

    include '../banco/conecta.php';

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    $query = $bd->query("SELECT * FROM produto WHERE id = $id");
    $registros = $query->fetchAll();

    foreach ($registros as $registro) :

      

    ?>

        <h2 class="text-center" id="categoria"><?php echo $registro['categoria'] ?></h2>
        <section class="container d-flex text-center justify-content-center align-items-center pt-3">
            <div class="row">
                <div class="col">
                    <img src="<?php echo "http://localhost/Projeto-PI/produto/" . $registro['imagem'] ?>" alt="" class="box-img">
                </div>
                <div class="col">
                    <h3 id="nomeProduto"><?php echo $registro['titulo'] ?></h3>
                    <p id="descProduto" class="pt-2">
                        <?php echo $registro['descricao'] ?>
                    </p>

                    <section class="pt-2">
                        <spam>Preço Aluguel: </spam>
                        <spam id="precoAluguel"><?php echo $registro['preco'] ?></spam>
                    </section>


                    <section class="pt-2">
                        <spam class="">Marca: </spam>
                        <spam id="marca"> <?php echo $registro['marca'] ?></spam>
                    </section>

                    <section class="pt-2">
                        <spam>Modelo: </spam>
                        <spam id="modelo"> <?php echo $registro['modelo'] ?></spam>
                    </section>


                    <spam class="d-block pt-2">Tempo Aluguel</spam>
                    <div class=" d-flex text-center justify-content-center">
                        <select class="form-select w-50 ">
                            <option value="1dia" id="1dia">1 dia</option>
                            <option value="7dias" id="2dias">7 dias</option>
                            <option value="15dias" id="3dias">15 dias</option>
                            <option value="30dias" id="4dias">30 dias</option>
                        </select>
                    </div>


                    <button class="botao btn btn-lg btn-success display-6 w-50 fs-5 white mt-4">
                        <a href="#" class="text-decoration-none text-reset" id="alugarProduto">Alugar</a>
                    </button>

                </div>
            </div>
        </section>
    <?php
    endforeach
    ?>
</main>

<div style="background-color: rgb(20, 124, 162);">
    <?php 
       include '../telas/footer.php';
    ?>
  </div>