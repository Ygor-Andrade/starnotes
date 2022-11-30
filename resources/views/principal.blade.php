<!doctype html>
<html lang="pt-br">

<head>
  <title>StarNotes</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <!-- Icons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="/css/style.css">


</head>



<body class="bg-teste-fundo">
  <header class="">
    <nav class="navbar bg-teste">
      <div class="container-fluid">

        <a class="navbar-brand text-light"><img width="60" src="imagens/loguinho.png" alt=""> StarNotes</a>

        <!-- pesquisa pc -->

        <div class="d-none d-lg-block">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button id="button" class="btn btn-pesquisar pesquisa-celular" type="submit">Pesquisar</button>
          </form>
        </div>



        <nav class="navbar fixed-right ">
          <div class="container-fluid">

            <button class="navbar-toggler btn-menu" type="button" data-bs-toggle="offcanvas" 0
              data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <i class="fa-solid fa-bars text-white"></i>
            </button>
            <div class="offcanvas offcanvas-end bg-fundo" tabindex="-1" id="offcanvasDarkNavbar"
              aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title text-light" id="offcanvasDarkNavbarLabel">Configurações</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
              </div>
              <!-- pesquisa celular -->

              <form class="d-flex d-lg-none" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button id="button" class="btn btn-pesquisar" type="submit">Pesquisar</button>
              </form>


              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="#">Link</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>




      </div>


      </div>
    </nav>


  </header>


  <main>

    <div class="d-flex flex-row mb-3 justify-content-between justify-content-md-start">

      <div>
        <button class="btn btn-primary botoes-barra" type="button">
          <i class="fa-regular fa-note-sticky"></i>
          Notas</button>

      </div>

      <div> <button class="btn btn-primary botoes-barra" type="button">
          <i class="fa-regular fa-bell"></i>
          Alarmes</button></div>

      <div> <button class="btn btn-primary botoes-barra" type="button">
          <i class="fa-regular fa-folder-closed"></i>
          Pastas</button>
      </div>

      <div><button class="btn btn-primary botoes-barra" type="button">
          <i class="fa-regular fa-trash-can"></i>
          Lixeira</button>
      </div>


    </div>


    <!-- <div class="d-none d-lg-block m-4 bingalinga mx-auto">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Escreva sua anotação" aria-label="Search">
      </form>
    </div> -->




    <div class="d-flex" data-masonry='{"percentPosition": true}'>

      <div class="card m-4">
        <div class="data">Blog <time>10 de Jul, 2020</time></div>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste accusamus, cum
          tempore id Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste
          accusamus, cum
          tempore id Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste
          accusamus, cum
          tempore id Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste
          accusamus, cum
          tempore id.</h2>
        <div class="autor">
          <div class="img-container">
          </div>
          <div class="info">
            <span>Autor</span>
            JUAN
          </div>
        </div>
        <div class="tags">
          <a href="#">Blog</a>
          <a href="#">Viagem</a>
          <a href="#">Aventura</a>
          <a href="#">Negócios</a>
        </div>

      </div>

      <div class="card m-4">
        <div class="data">Blog <time>10 de Jul, 2020</time></div>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste accusamus, cum
          tempore id, dolorem officia. dolorem officiadolorem officiadolorem officia </h2>
        <div class="autor">
          <div class="img-container">
          </div>
          <div class="info">
            <span>Autor</span>
            JUAN
          </div>
        </div>
        <div class="tags">
          <a href="#">Blog</a>
          <a href="#">Viagem</a>
          <a href="#">Aventura</a>
          <a href="#">Negócios</a>
        </div>

      </div>

      <div class="card m-4">
        <div class="data">Blog <time>10 de Jul, 2020</time></div>
        <h2>Lorem ipsum dolor sit amdolorem officiaet consectetur adipisicing elit. Corrupti ab voluptate alias iste
          accusamus, cum
          tempore id, dolorem officia. </h2>
        <div class="autor">
          <div class="img-container">
          </div>
          <div class="info">
            <span>Autor</span>
            JUAN
          </div>
        </div>
        <div class="tags">
          <a href="#">Blog</a>
          <a href="#">Viagem</a>
          <a href="#">Aventura</a>
          <a href="#">Negócios</a>
        </div>

      </div>

      <div class="card m-4">
        <div class="data">Blog <time>10 de Jul, 2020</time></div>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste accusamus, cum
          tempore id, dolorem offdolorem officiadolorem officiadolorem officiadolorem officiadolorem officiadolorem
          officiadolorem officiadolorem officiadolorem officiadolorem officiadolorem officiadolorem officiaicia. </h2>
        <div class="autor">
          <div class="img-container">
          </div>
          <div class="info">
            <span>Autor</span>
            JUAN
          </div>
        </div>
        <div class="tags">
          <a href="#">Blog</a>
          <a href="#">Viagem</a>
          <a href="#">Aventura</a>
          <a href="#">Negócios</a>
        </div>

      </div>

      <div class="card m-4">
        <div class="data">Blog <time>10 de Jul, 2020</time></div>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste accusamus, cum
          tempore id, dolorem officia. </h2>
        <div class="autor">
          <div class="img-container">
          </div>
          <div class="info">
            <span>Autor</span>
            JUAN
          </div>
        </div>
        <div class="tags">
          <a href="#">Blog</a>
          <a href="#">Viagem</a>
          <a href="#">Aventura</a>
          <a href="#">Negócios</a>
        </div>

      </div>

      <div class="card m-4">
        <div class="data">Blog <time>10 de Jul, 2020</time></div>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste accusamus, cum
          tempore id, dolorem officia. </h2>
        <div class="autor">
          <div class="img-container">
          </div>
          <div class="info">
            <span>Autor</span>
            JUAN
          </div>
        </div>
        <div class="tags">
          <a href="#">Blog</a>
          <a href="#">Viagem</a>
          <a href="#">Aventura</a>
          <a href="#">Negócios</a>
        </div>

      </div>

      <div class="card m-4">
        <div class="data">Blog <time>10 de Jul, 2020</time></div>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste accusamus, cum
          tempore id, dolorem officia. </h2>
        <div class="autor">
          <div class="img-container">
          </div>
          <div class="info">
            <span>Autor</span>
            JUAN
          </div>
        </div>
        <div class="tags">
          <a href="#">Blog</a>
          <a href="#">Viagem</a>
          <a href="#">Aventura</a>
          <a href="#">Negócios</a>
        </div>

      </div>

      <div class="card m-4">
        <div class="data">Blog <time>10 de Jul, 2020</time></div>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste accusamus, cum
          tempore id, dolorem officia. </h2>
        <div class="autor">
          <div class="img-container">
          </div>
          <div class="info">
            <span>Autor</span>
            JUAN
          </div>
        </div>
        <div class="tags">
          <a href="#">Blog</a>
          <a href="#">Viagem</a>
          <a href="#">Aventura</a>
          <a href="#">Negócios</a>
        </div>

      </div>

      <div class="card m-4">
        <div class="data">Blog <time>10 de Jul, 2020</time></div>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste accusamus, cum
          tempore id, dolorem officia. </h2>
        <div class="autor">
          <div class="img-container">
          </div>
          <div class="info">
            <span>Autor</span>
            JUAN
          </div>
        </div>
        <div class="tags">
          <a href="#">Blog</a>
          <a href="#">Viagem</a>
          <a href="#">Aventura</a>
          <a href="#">Negócios</a>
        </div>

      </div>

      <div class="card m-4">
        <div class="data">Blog <time>10 de Jul, 2020</time></div>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ab voluptate alias iste accusamus, cum
          tempore id, dolorem officia. </h2>
        <div class="autor">
          <div class="img-container">
          </div>
          <div class="info">
            <span>Autor</span>
            JUAN
          </div>
        </div>
        <div class="tags">
          <a href="#">Blog</a>
          <a href="#">Viagem</a>
          <a href="#">Aventura</a>
          <a href="#">Negócios</a>
        </div>



      </div>



      <!-- Code begins here -->




  </main>


  <footer>

  </footer>

  <a href="#" class="bt-float " data-bs-toggle="modal" data-bs-target="#modal-post">
    <i class="fa fa-plus my-bt-float"></i>
  </a>

 
    <div class="modal fade" id="modal-post" tabindex="-1" aria-labelledby="modal-postLabel" aria-hidden="true">
<<<<<<< HEAD
      <div class="modal-dialog">
        <div class=" modal-content">
          <div class="modal-header  ">
            <h1 class="fs-2 text-white fw-bolder" id="modal-postLabel"> Anotação</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>  
          <div class="modal-body">

        <div class="mb-3">
          <label for="" class="form-label"></label>
          <textarea class="form-control" name="nota" id="nota" rows="3"></textarea>
        </div>
=======
      <form>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-postLabel">Notas</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
>>>>>>> c7194f2df17c484e571eb1a27568f42729fb07bd

          <div class="mb-3">
            <label for="" class="form-label"></label>
            <textarea class="form-control" name="nota" id="nota" rows="3"></textarea>
          </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
    async></script>

  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
    async></script>


  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea#nota', // Replace this CSS selector to match the placeholder element for TinyMCE
      plugins: 'code table lists',
      toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });
  </script>


</body>

</html>