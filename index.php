<!DOCTYPE html>
<html lang="pt">
<head>
    <?php
        include "function.php";
        include "conexao.php";

        if(!isset($_GET['lang'])){
            $_GET['lang'] = 'pt';
            include ("langPT.php");
        }else{
            if($_GET['lang'] == 'en'){
                include ("langEN.php");
            }else{
                include ("langPT.php");
            }
        }
        $SHORTNAME = $LANG['lang']['shortname'];
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/bootstrap-4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7/css/font-awesome.min.css">

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap-4.1.3/js/bootstrap.js"></script>
    <script src="assets/js/sorttable.js"></script>

    <style>
        @font-face {
            font-family: unipampa;
            src: url(assets/fonts/humanist777.ttf);
        }
        body{
            font-family: unipampa;
        }
        .navbar{
            padding: 10px;
        }
    </style>
</head>
<body> <br> <br> <br>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> <br> <br>
        <a href="<?= isset($_GET['lang']) && $_GET['lang'] == 'en' ? 'en' : 'pt' ?>" class="navbar-brand">
            <span class="d-none d-md-block">PPGES - <?= $LANG['navbar']['titulo']?></span>
            <span class="d-md-none d-block">PPGES</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
            <form class="form-inline my-2 my-lg-0" action="get">
                <input name="pesq" class="form-control mr-sm-2" type="search" placeholder="<?= $LANG['navbar']['pesquisa']?>" aria-label="<?= $LANG['navbar']['pesquisa']?>">
                <button name="pag" value="pesquisa" class="btn btn-outline-success my-2 my-sm-0" type="submit"><?= $LANG['navbar']['pesquisa']?></button>
            </form>

            <div class="d-md-none d-block">
                <ul class="list-group list-group-flush">
                    <?php
                    $lang = isset($_GET['lang']) && $_GET['lang'] == 'en' ? 'en' : 'pt';

                    $n = 0;
                    while(isset($LANG['menu'][$n])){
                        $class = (
                                (isset($_GET['pag']) &&  ($_GET['pag'] == $LANG['menu'][$n]['url'])) ||
                                (isset($_GET['pag']) && ($_GET['pag'] == '' && $LANG['menu'][$n]['url'] == 'home') || (!isset($_GET['pag']) && $LANG['menu'][$n]['url'] == 'home'))
                        ) ? 'bg-success text-white' : '';
                        echo "<a href='.?lang=$lang&pag=".$LANG['menu'][$n]['url']."' class='text-success $class'><li class='list-group-item $class'>". $LANG['menu'][$n]['titulo']. "</li></a>";
                        $n++;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav> <br>


    <div class="container">
        <div class="row">
            <div class="col-md col-md-3" style="margin-bottom: 15px">
                <div class="card d-none d-md-block">
                    <img src="assets/images/<?= $LANG['logo']?>" class="card-img-top" alt="...">
                    <ul class="list-group list-group-flush">
                        <?php
                            $lang = isset($_GET['lang']) && $_GET['lang'] == 'en' ? 'en' : 'pt';

                            $n = 0  ;
                            while(isset($LANG['menu'][$n])){
                                $class = (
                                    (isset($_GET['pag']) &&  ($_GET['pag'] == $LANG['menu'][$n]['url'])) ||
                                    (isset($_GET['pag']) && ($_GET['pag'] == '' && $LANG['menu'][$n]['url'] == 'home') || (!isset($_GET['pag']) && $LANG['menu'][$n]['url'] == 'home'))
                                ) ? 'bg-success text-white' : '';
                                echo "<a href='.?lang=$lang&pag=".$LANG['menu'][$n]['url']."' class='text-success $class'><li class='list-group-item $class'>". $LANG['menu'][$n]['titulo']. "</li></a>";
                                $n++;
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md col-md-9">
                <div class="container">
                    <div class="row">
                        <?php
                            if(isset($_GET['pag']) && file_exists("$_GET[pag].php")){
                                include "$_GET[pag].php";
                            }elseif(isset($_GET['pag']) && !file_exists("$_GET[pag].php")){
                                include "error.php";
                            }else{
                                include "home.php";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>

    <footer class="page-footer font-small bg-light pt-4">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase"><?= $LANG['lang']['titulo']?></h5>
                    <a href=".?lang=en&pag=<?= isset($_GET['pag']) ? addslashes($_GET['pag']) : 'home' ?>" class="text-success"> <?= $LANG['lang']['en'] ?> </a> |
                    <a href=".?lang=pt&pag=<?= isset($_GET['pag']) ? addslashes($_GET['pag']) : 'home' ?>" class="text-success"> <?= $LANG['lang']['pt'] ?> </a>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase"><?= $LANG['contato']['titulo'] ?></h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>Email: <span class="text-success">example@email.com</span></p>
                            <p><?= $LANG['contato']['telefone']?>: <span class="text-success">(99) 9 9999-9999 </span></p>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <div class="footer-copyright text-center py-3">
            <p class="text-secondary">
                <?= $LANG['developer']['titulo'] ?>: Igor Flores <?= $LANG['developer']['e'] ?> Amanda Ribeiro <br>
                2019 - <?= date("Y")?>
            </p>
        </div>
    </footer>
</body>
</html>