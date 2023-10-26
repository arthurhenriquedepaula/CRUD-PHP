<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD</title>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>

  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo usuário</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar usuários</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include("configs.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("new_user.php");
                    break;
                    case "listar":
                        include("list_user.php");
                    break;
                    case "salvar":
                        include("save_user.php");
                    break;
                    case "editar":
                        include("update_user.php");
                    break;
                    default:
                        print "<h1>Bem vindos ao meu CRUD em PHP!!!</h1>";    
                }
            ?>
            </div>
        </div>
    </div>
  </body>
</html>