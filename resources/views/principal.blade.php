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
              <div>
                <div class="text-center">
                  <p class="text-center text-white fw-bold">
                    Olá
                    <?php $user = auth()->user(); echo $user->name; ?>
                    <br>
                    email:
                    <?php echo $user->email; ?>

                  </p>
                </div>
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




    <div class="d-flex" data-masonry='{"percentPosition": true}'>

      @if(count($anotacaos) == 0 )
      <p>Não há notas criadas</p>
      @else
      @foreach($anotacaos as $anotacao)
      <div class="card m-4" id="{{$anotacao->id}}">
        <div class="data">Publicado em <time>{{$anotacao->timestemp}}</time></div>
        <h1 class="titulo">{{$anotacao->titulo}}</h1>
        <div class="text-light nota">
          {!! $anotacao->nota !!}
        </div>
        <div class="d-flex flex-row-reverse">
          <form method="POST" action="{{route('deletar', [$anotacao->id])}}" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" onClick="if(!confirm('Tem certeza que deseja excluir?')){return false}"
              class="btn btn-link mx-3"><i class="fa-regular fa-trash-can"></i></button>
          </form>

          <a href="" class="btn btn-link" onClick="carregaDadosModal({{$anotacao->id}})" data-bs-toggle="modal"
            data-bs-target="#modal-edicao"><i class="fs-5 fa-solid fa-pen-to-square"></i></a>

        </div>
      </div>
      @endforeach

      @endif

    </div>



    <!-- Code begins here -->




  </main>


  <footer>

  </footer>

  <a href="#" class="bt-float " data-bs-toggle="modal" data-bs-target="#modal-post">
    <i class="fa fa-plus my-bt-float"></i>
  </a>


  <div class="modal fade" id="modal-post" tabindex="-1" aria-labelledby="modal-postLabel" aria-hidden="true">



    <form method="POST" action="{{route('gravar')}}" enctype="multipart/form-data">
      @csrf
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modal-postLabel">Notas</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="mb-3">
              <label for="titulo" class="form-label">Titulo da anotação</label>
              <input type="text" required class="form-control" name="titulo" id="titulo">
            </div>

            <div class="mb-3">
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

  <div class="modal fade" id="modal-edicao" tabindex="-1" aria-labelledby="modal-edicaoLabel" aria-hidden="true">
    <form method="POST" action="{{route('atualizar_nota')}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <input type="hidden" name="id" id="campooculto">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modal-postLabel">Notas</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="mb-3">
              <label for="titulo" class="form-label">Edição da anotação</label>
              <input type="text" required class="form-control" name="titulo" id="edit-titulo">
            </div>

            <div class="mb-3">
              <textarea class="form-control" name="nota" id="edit-nota" rows="3"></textarea>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Atualizar</button>
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


  <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
  <script src="{{asset('js/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea#nota',  // Replace this CSS selector to match the placeholder element for TinyMCE,
      plugins: 'code table lists image',
      toolbar: 'undo redo | image | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | tae',
      tup: function (editor) {
        editor.on('change', function () {
          tinymce.triggerSave();
        });
      }
    });



    tinymce.init({
      selector: 'textarea#edit-nota',  // Replace this CSS selector to match the placeholder element for TinyMCE
      plugins: 'code table lists image',
      toolbar: 'undo redo | image | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | tae',
      tup: function (editor) {
        editor.on('change', function () {
          tinymce.triggerSave();
        });
      }
    });

    const carregaDadosModal = (id) => {
      var cardEdicao = document.getElementById(id)
      var titEdicao = cardEdicao.querySelector('.titulo').innerText
      var conteudo = cardEdicao.querySelector('.nota').innerHTML
      document.getElementById('edit-titulo').value = titEdicao
      tinymce.activeEditor.setContent(conteudo);
      document.getElementById('campooculto').value = id
      // console.log(cardEdicao.querySelector('input.oculto'))
    }

    tinymce.init({
      

      image_class_list: [
        { title: 'img-responsive', value: 'img-responsive' },
      ],
      height: 500,
      setup: function (editor) {
        editor.on('init change', function () {
          editor.save();
        });
      },
      plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

      image_title: true,
      automatic_uploads: true,
      images_upload_url: '/upload',
      file_picker_types: 'image',
      file_picker_callback: function (cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
          var file = this.files[0];

          var reader = new FileReader();
          reader.readAsDataURL(file);
          reader.onload = function () {
            var id = 'blobid' + (new Date()).getTime();
            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
            var base64 = reader.result.split(',')[1];
            var blobInfo = blobCache.create(id, file, base64);
            blobCache.add(blobInfo);
            cb(blobInfo.blobUri(), { title: file.name });
          };
        };
        input.click();
      }
    });


  </script>



</body>

</html>