<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafiofinalcurso</title>
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
                    <li><a href="cadastro.php" class="nav-link">Cadastrar novo usuário</a></li>
                    <li><a href="#" class="nav-link">Acessar conta</a></li>
                    <li><a href="InserirNoticias.php?sucesso=0" class="nav-link">Cadastrar Notícia</a></li>
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

    <!-- Slider com Carousel -->
    <div class="carousel slide" id="slider" data-bs-ride="carousel">
        <div class="carousel-inner" id="carrosel-lista">
            <!-- aqui aparecerão as notícias -->
        </div>
        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slider">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slider">
            <span class="carousel-control-next-icon"></span>
        </button>
        <div class="carousel-indicators">
            <button data-bs-slide-to="0" data-bs-target="#slider" class="active"></button>
            <button data-bs-slide-to="1" data-bs-target="#slider"></button>
            <button data-bs-slide-to="2" data-bs-target="#slider"></button>
        </div>
    </div>

    <!-- Conteúdo em Colunas -->
    <main>
        <div class="container my-5">
            <div class="row" id="produto-lista">

<!-- Conteúdo cairá aqui 20 notícias -->
                <!--
                    <div class="col-md-4 text-center">
                    <a href="#" class="bt-modal text-muted text-decoration-none" data-bs-toggle="modal" data-bs-target="#show-img">
                        <img src="img/thumb-01.jpg" alt="Teste" width="200" height="200" class="rounded-3 shadow">
                        <h4>Lorem</h4>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor placeat eveniet est? 
                            Eaque ipsum nihil enim suscipit iste, doloribus a?
                        </p>
                    </a>
                </div>   
-->           
            </div>
        </div>
   
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="container border-top py-3">
          <p>&copy; 2023. Cuca curiosa.</p>  
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/indexTop3.js"></script>
    <script src="js/index.js"></script>
    
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