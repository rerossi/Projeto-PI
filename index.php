<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //session_start();

  if(!isset($_SESSION['id'])){
      echo "Faça o login antes";
      exit();
    } 
  require_once('banco/conecta.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">

    <title>Rentall</title>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous">
      </script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

</head>

<body>
  <header>

    <nav class="navbar navbar-light " style="background-color:whitesmoke;">
      <div class="container-fluid">
        <div class="row w-100">
          <div class="col-2">
            <a class="navbar-brand" href="#">
              <img src="imagens/Logo-completo-azul.png" alt="" width="150px" class="d-inline-block align-text-center">
            </a>
          </div>

          <div class="col-8">
            <div class="justify-content-center mt-2 row" style="margin-left: 70px;">
              <form class="d-flex col-8">
                <input class="form-control me-2" style = "min-width: auto; "type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline" style="color:rgb(20, 124, 162); background-color: white; border-color: rgb(20, 124, 162);" type="submit">Search</button>
              </form>
            </div>
          </div>

          <div class="col-2 text-end">
           <a href="#">  <img src="imagens/login.png" width="40px" > </a>
            <spam ><a href= "#" style= "text-decoration: none; ">Sair </a></spam>

          </div>
        </div>

        <div class="row w-100">
          <div class="col-12">
          <ul class="nav justify-content-center">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" style="color:rgb(20, 124, 162);" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Esportes</a></li>
                <li><a class="dropdown-item" href="#">Games</a></li>
                <li><a class="dropdown-item" href="#">Eletroportateis</a></li>
                <li><a class="dropdown-item" href="#">Ferramentas</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:rgb(20, 124, 162);">Ofertas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:rgb(20, 124, 162);">Baixe o App</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:rgb(20, 124, 162);">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:rgb(20, 124, 162);">Contato</a>
            </li>
          </ul>
          </div>

        </div>


      </div>



    </nav>

  </header>

  <main>
    <!--CARROuSSEL-->
    <section class="pt-2">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item text-center active" data-bs-interval=5000">
            <img src="imagens/carrousel.png" class="" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item text-center" data-bs-interval="5000">
            <img src="imagens/carrousel.png" class="" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item text-center">
            <img src="imagens/carrousel.png" class="" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

  </main>
  <section class="my-5 container">

    <div class="row  justify-content-center ">
      <div class=" p-3 col-2 border border-2 border-dark text-center my-1 mx-1 ">

        <img src="imagens/ferramentas.png" width="40%" class="my-1">
        <h3 class="fs-4">Ferramentas</h3>
      </div>
      <div class=" p-1 col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="imagens/controle-de-video-game.png" width="50%">
        <h3 class="fs-4">games</h3>
      </div>
      <div class=" p-2 col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="imagens/informatica (2).png" width="50%">
        <h3 class="fs-4">Informatica</h3>
      </div>
      <div class=" p-2 col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="imagens/sports.png" width="50%">
        <h3 class="fs-4">Esportes</h3>
      </div>
      <div class=" p-2 col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="imagens/instrumentos-musicais.png" width="50%">
        <h3 class="fs-4">Instrumentos Musicais</h3>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="imagens/batedeira.png" width="50%">
        <h3 class="fs-4">Eletroportateis</h3>
      </div>
      <div class="col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="imagens/moto.png" width="50%">
        <h3 class="fs-4">Veiculos</h3>
      </div>
      <div class="col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="imagens/camera.png" width="50%">
        <h3 class="fs-4">Audio e Video</h3>
      </div>
      <div class="col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="imagens/moda.png" width="50%">
        <h3>Moda</h3>
      </div>
      <div class="col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="imagens/brinquedos-do-bebe.png" width="50%">
        <h3>Brinquedos</h3>
      </div>

    </div>
    </div>

  </section>

  <div class="container-fluid">

    <footer class="row row-cols-5 py-4  border-top" style="background-color: rgb(20, 124, 162);">
      <img src="imagens/logo-branco.png" width="50px">

      <div class="col"></div>

      <div class="col">
        <h5 style="color: white;"> <b> Conheça a Rentall </b> </h5>
        <ul class="nav flex-column"  style="color: white;">
          <li class="nav-item mb-2" style="font-size: 15px;"> Perguntas frequentes</b></li>
          <li class="nav-item mb-2" style="font-size: 15px;"> Política de privacidade </li>
          <li class="nav-item mb-2" style="font-size: 15px;">Sobre o Rentall</li>
          <li class="nav-item mb-2" style="font-size: 15px;"> Deficiente auditivo</li>
          <li class="nav-item mb-2" style="font-size: 15px;">Imprensa</li>
        </ul>
      </div>

      <div class="col">
        <h5 style="color: white;"> <b> Central de Ajuda </b></h5>
        <ul class="nav flex-column"  style="color: white;">
          <li class="nav-item mb-2" >Chat online</li>
          <li class="nav-item mb-2" style="font-size: 15px;"> SAC 0800 </li>
          <li class="nav-item mb-2" style="font-size: 15px;">Fale conosco</li>
          <li class="nav-item mb-2" style="font-size: 15px;"> Deficiente auditivo</li>
          <li class="nav-item mb-2" style="font-size: 15px;">E-mail</li>
        </ul>
      </div>

      <div class="col">
        <h5 style="color: white;"> <b> Para Empresas </b> </h5>
        <ul class="nav flex-column"  style="color: white;">
          <li class="nav-item mb-2"> Parcerias </li>
          <li class="nav-item mb-2" style="font-size: 15px;"> Atendimentos </li>
          <li class="nav-item mb-2" style="font-size: 15px;">Descontos</li>
          <li class="nav-item mb-2" style="font-size: 15px;"> Ptogramas de ponotos</li>
          <li class="nav-item mb-2" style="font-size: 15px;">Area exclusiva</li>
        </ul>
      </div>


    </footer>

  </div>





</body>

</html>