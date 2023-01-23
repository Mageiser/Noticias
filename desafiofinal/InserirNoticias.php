<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InserirNoticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<style> 
    #btn-close-custon {
        position: absolute;
        right: 20px;
    }
</style>
</head>
<body>
    <!-- Modal com a Imagem -->
    <div class="modal" id="show-img">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="btn-close btn-close-white" data-bs-dismiss="modal" id="btn-close-custon"></button>
                    <img src="" alt="Modal" class="d-block w-100">
                </div>
            </div>
        </div>
    </div>

    <!-- Barra de Navegação -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="desafiofinalcurso.html" class="navbar-brand"> <img src="img/cerebro1.jpg" alt="Teste" width="auto" height="75" class="rounded-3 shadow"> </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-principal">
                <i class="navbar-toggler-icon"></i>
            </button>
            <a href="desafiofinalcurso.html" class="navbar-brand"> Cuca Curiosa! </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-principal">
                <i class="navbar-toggler-icon"></i>
            </button>


            <div id="menu-principal" class="navbar-collapse collapse">
                <ul class="navbar-nav me-auto">
                    <li><a href="#" class="nav-link"></a></li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle text-white text-decoration-none me-3" data-bs-toggle="dropdown">
                        <img src="img/avatar.jpg" alt="Avatar" width="30" height="30" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-lg-end">
                        <li><a href="#" class="dropdown-item">Meus dados</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="#" class="dropdown-item">Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>  
    </nav>

   

    
    <!-- Inserção das notícias-->

    <div>
        <h2 class="display-5 text-sm-center text-bg-success"> Insira sua notícia!

        <?php if ($_GET ['sucesso']==1) { ?>
                    <div class="mb-3 text-danger fst-italic">
                        Notícia inserida com SUCESSO!
                    </div>
                <?php } ?>
        
        </h2>
    </div>

    <div class="container">
        <div class="bg-light border border-secondary shadow-sm my-4 p-3">
            <form action="inserir.php" enctype="multipart/form-data" method="POST" id="form-noticia" novalidate autocomplete="off" >
                <div class="row">
                    <div class="col-sm-12">
                        <label class="form-label col-12">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control col-12" required>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label col-12">Subtítulo</label>
                        <input type="text" name="subtitulo" id="subtitulo" class="form-control col-12" required>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label col-12">Notícia</label>
                        <textarea type="text" cols="40" rows="5" name="noticia" id="noticia" class="form-control col-12" required></textarea>
                    </div>
                    <div class="col-sm-4">


                    <label for="imagem" class="form-label">Imagem (Tamanho máx. 5 MB)</label>
                      <input type="file" accept=".jpg" class="form-control" value="Carregar arquivo" id="imagem" name="imagem" required>
                      
                    </div>
                    <div class="col-sm-2">
                        <label class="form-label col-12">Data da publicação</label>
                        <input type="date" name="data_noticia" id="data_noticia" class="form-control col-12"
                            placeholder="00/00/0000" required>
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label col-12">Autor</label>
                        <input type="text" name="autor" id="autor" class="form-control col-12" required>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-4 my-4">
                            <button id="btn-inserir" class="btn btn-danger">Enviar</button>
                    </div>
                    <div class="col-sm-4 my-4">                 
                            <button id="btn-voltar" class="btn btn-primary">
                                <a href="desafiofinalcurso.html" class="nav-link">Voltar</a>
                            </button>  
                    </div>
            </div>


         
            </form>
        </div>
    </div>
    
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="container border-top py-3">
          <p>&copy; 2023. Cuca curiosa.</p>  
        </div>
    </footer>
</body>
<script>
    // Abrir Modal com a Imagem
    modalImg = document.querySelector('#show-img img');
    btModalList = document.querySelectorAll('.bt-modal');
    btModalList.forEach(btModal => {
        btModal.onclick = () => {
            modalImg.src = btModal.querySelector('img').src;
        }
    });
</script>
</html>