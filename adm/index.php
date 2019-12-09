<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/fonts/font-awesome-4.7/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/bootstrap-4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/simple-sidebar.css">

        <script src="../assets/js/jquery-3.4.1.min.js"></script>
        <script src="../assets/bootstrap-4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/sorttable.js"></script>

        <?php
            require_once ('assets/stichoza/vendor/autoload.php');
            use Stichoza\GoogleTranslate\GoogleTranslate;
            $tr = new GoogleTranslate('en_US');
            include "../function.php";
            include "../conexao.php";
            session_start();

            if (isset($_GET['logout']) && $_GET['logout'] == 'true'){
                session_destroy();
                header("location: login.php");
                exit;
            }
            if(empty($_SESSION) and !isset($_GET['pag'])){                   // Se não tiver ngm logado vai para a página de login
                header("location: login.php");
                exit;
            }elseif(empty($_SESSION) and isset($_GET['pag'])){
                header("location: vish.php");
            }

        ?>
    </head>

    <body>

        <div class="d-flex" id="wrapper">
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading"> [PPGES] Administrativo</div>
                <div class="list-group list-group-flush">
                    <a href=".?pag=home" class="list-group-item list-group-item-action bg-light text-success">Dashboard</a>
                    <a href=".?pag=gerenciarAlunos" class="list-group-item list-group-item-action bg-light text-success">  Alunos</a>
                    <a href=".?pag=gerenciarApresentacao" class="list-group-item list-group-item-action bg-light text-success">Apresentação</a>
                    <a href=".?pag=gerenciarArtigos" class="list-group-item list-group-item-action bg-light text-success">Artigos</a>
                    <a href=".?pag=gerenciarCarrossel" class="list-group-item list-group-item-action bg-light text-success">Carrossel</a>
                    <a href=".?pag=gerenciarCoordenacao" class="list-group-item list-group-item-action bg-light text-success">Coordenação</a>
                    <a href=".?pag=gerenciarDisciplinas" class="list-group-item list-group-item-action bg-light text-success">  Disciplinas</a>
                    <a href=".?pag=gerenciarInformes" class="list-group-item list-group-item-action bg-light text-success">Informes</a>
                    <a href=".?pag=gerenciarProfessores" class="list-group-item list-group-item-action bg-light text-success">  Professores</a>
                </div>
            </div>

            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

                    <div class="card d-block d-md-none">
                        <button aria-expanded="false" data-toggle="collapse" class="btn btn-outline-secondary" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>
                    </div>

                    <div class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $_SESSION['usuario']['nome'] ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" data-toggle='modal' data-target='#config'>Alterar dados da conta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href=".?logout=true">Sair</a>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="container-fluid">
                    <div class="row">
                        <?php
                            if(isset($_GET['pag']) && file_exists("$_GET[pag].php")){          // Se tiver valor na var $_GET e exitir o arquivo da var + .php
                                include "$_GET[pag].php";                                            // Inclui o arquivo da var $_GET[pag] + php
                            }elseif(isset($_GET['pag']) && !file_exists("$_GET[pag].php")){    // Se tiver valor na var $_GET e não existir o arquivo
                                include "error.php";                                                 // Inclui página de erro
                            }else{                                                             // Senão inclui a home.php
                                include "home.php";
                            }
                        ?>
                    </div>
                </div>
            </div>

        </div>

        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

        <div class='modal fade' id='config' role='dialog' style='text-align: left'>
            <div class='modal-dialog modal-lg'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h4 class='modal-title'>
                            <span class="fa fa-edit"></span>
                            Alterar dados da conta
                        </h4>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>

                    <form action='.?pag=$action' enctype='multipart/form-data' method='post'>
                        <div class='modal-body'>
                            <label for="nomeconfig">Nome</label>
                            <input type="text" id='nomeconfig' name="nome" placeholder="" class="form-control" value="<?= $_SESSION['usuario']['nome']?>" required><br>
                            <label for="emailconfig">Email</label>
                            <input type="email" id='emailconfig' name="email" placeholder="" class="form-control" value="<?= $_SESSION['usuario']['email']?>" required>

                        </div>
                        <div class='modal-footer'>
                            <button type='submit' class='btn btn-success'>Confirmar</button>
                            <button type='button' class='btn btn-default' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span> Cancelar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </body>

</html>
