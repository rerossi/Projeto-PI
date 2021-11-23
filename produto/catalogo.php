<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../telas/header.php';
include '../telas/navbar.php';
?>

<link rel="stylesheet" href="../css/catalogo.css">

<main class="pt-5 pb-5">
    <section class="container">
        <div class="row justify-content-center">

            <div class="card mx-4" style="width: 18rem;">
                <img src="https://via.placeholder.com/300x250" id="imgProduto" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" id="titulo">Card title</h5>
                    <p class="card-text" id="descricao">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="botao btn "><a href="#" class="text-decoration-none text-reset">Ver Produto</a></button>
                </div>
            </div>

            <div class="card mx-4" style="width: 18rem;">
                <img src="https://via.placeholder.com/300x250" id="imgProduto" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" id="titulo">Card title</h5>
                    <p class="card-text" id="descricao">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="botao btn"><a href="#" class="text-decoration-none text-reset">Ver Produto</a></button>
                </div>
            </div>

            <div class="card mx-4" style="width: 18rem;">
                <img src="https://via.placeholder.com/300x250" id="imgProduto" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" id="titulo">Card title</h5>
                    <p class="card-text" id="descricao">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="botao btn "><a href="#" class="text-decoration-none text-reset">Ver Produto</a></button>
                </div>
            </div>

        </div>
    </section>
</main>

<div class="container-fluid">
    <?php
    include '../telas/footer.php';
    ?>
</div>