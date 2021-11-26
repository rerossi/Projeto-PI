<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../telas/header.php';
include '../telas/navbar.php';
?>

<link rel="stylesheet" href="../css/vitrineProduto.css">

<main class="pt-5 pb-5">
    <h2 class="text-center" id="categoria">Games</h2>
    <section class="container d-flex text-center justify-content-center align-items-center pt-3">
        <div class="row">
            <div class="col">
                <img src="https://via.placeholder.com/600x400" alt="">
            </div>
            <div class="col">
                <h3 id="nomeProduto">Fone Gamer</h3>
                <p id="descProduto" class="pt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus hic asperiores deser. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eos.
                </p>

                <section class="pt-2">
                    <spam>Preço Aluguel: </spam>
                    <spam id="precoAluguel">-</spam>
                </section>


                <section class="pt-2">
                    <spam class="">Marca: </spam>
                    <spam id="marca"> - </spam>
                </section>

                <section class="pt-2">
                    <spam>Modelo: </spam>
                    <spam id="modelo"> - </spam>
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
</main>

<div class="container-fluid">
    <?php
    include '../telas/footer.php';
    ?>
</div>