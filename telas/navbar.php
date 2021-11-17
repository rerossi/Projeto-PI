
<body>
<header>

<nav class="navbar navbar-light " style="background-color:whitesmoke;">
  <div class="container-fluid">
    <div class="row w-100">
      <div class="col-2">
        <a class="navbar-brand" href="#">
          <img src="../imagens/Logo-completo-azul.png" alt="" width="150px" class="d-inline-block align-text-center">
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
       <a href="../login/login.html">  <img src="../imagens/login.png" width="40px" > </a>
        <?php

        session_start();
            

            if(!empty($_SESSION)){
              ?>
                  <a href= "../login/sair.php" style= "text-decoration: none;"> <img src="../imagens/logout.png" width="28px"> </a>

              <?php
            } 
        ?>

      </div>
    </div>

    <div class="row w-100">
      <div class="col-12">
      <ul class="nav justify-content-center">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" style="color:rgb(20, 124, 162);" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
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




