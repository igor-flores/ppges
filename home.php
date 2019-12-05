<title> Página Inicial</title>
<div class="row">
    <div class="col-md-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">

                <?php
                    $query = mysqli_query($con, "SELECT * FROM carrossel");
                    $i = 0;
                    while(mysqli_fetch_array($query)){
                        $active = $i == 0 ? 'active' : '';
                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='$i' class='$active'></li>";
                        $i++;
                    } $query = null;
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                $query = mysqli_query($con, "SELECT * FROM carrossel");
                $i = 0;
                while($carrossel = mysqli_fetch_array($query)){
                    $active = $i == 0 ? 'active' : '';
                    echo "
      
                        <div class='carousel-item $active'>
                            <a href='$carrossel[url]'>
                                <img src='assets/images/carrossel/$carrossel[image]' class='d-block w-100' alt='$carrossel[url]'>
                            </a>
                        </div>                    
                    ";
                    $i++;
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
    </div>
    <div class="col-md-12">
        <h3> <?= $LANG['home']['noticia']['titulo'] ?> </h3>
    </div>
    <div class="col-sm-6" style="margin-bottom: 15px">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">16/10/2019</h5>
                <p class="card-text">Acadêmico do PPGES recebe premiação na Escola Regional de Engenharia de Software</p>
                <button class='btn btn-success text-white' type='button' data-toggle='modal' data-target='#ModalLongoExemplo'> <?= $LANG['home']['noticia']['botao'] ?> </button>
            </div>
        </div>
    </div>
    <div class="col-sm-6" style="margin-bottom: 15px">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">27/05/2019</h5>
                <p class="card-text">Seleção 2019 - PPGES</p> <br>
                <button class='btn btn-success text-white' type='button' data-toggle='modal' data-target='#ModalLongoExemplo'> <?= $LANG['home']['noticia']['botao'] ?> </button>
            </div>
        </div>
    </div>
</div>


<div class='modal fade' id='ModalLongoExemplo' tabindex='-1' role='dialog' aria-labelledby='TituloModalLongoExemplo' aria-hidden='true'>
    <div class='modal-dialog modal-lg' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='TituloModalLongoExemplo'>Xxxxxxx xxxx xxxxxxxxx</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>


                <p class='text-justify'>Xxxxxxxxxx xxxxxxxxxxxx xxx xxxxxxxxxxx xxxx. Xxx xxxxxx x xxxxxxxx xxxxxxxxx xxxx xxxxx xxxx.Xxxxxxxxxx xxxxxxxxxxxx xxx xxxxxxxxxxx xxxx. Xxx xxxxxx x xxxxxxxx xxxxxxxxx xxxx xxxxx xxxx.Xxxxxxxxxx xxxxxxxxxxxx xxx xxxxxxxxxxx xxxx. Xxx xxxxxx x xxxxxxxx xxxxxxxxx xxxx xxxxx xxxx.Xxxxxxxxxx xxxxxxxxxxxx xxx xxxxxxxxxxx xxxx. Xxx xxxxxx x xxxxxxxx xxxxxxxxx xxxx xxxxx xxxx.Xxxxxxxxxx xxxxxxxxxxxx xxx xxxxxxxxxxx xxxx. Xxx xxxxxx x xxxxxxxx xxxxxxxxx xxxx xxxxx xxxx. <br> Xxxxxxxxxx xxxxxxxxxxxx xxx xxxxxxxxxxx xxxx. Xxx xxxxxx x xxxxxxxx xxxxxxxxx xxxx xxxxx xxxx.Xxxxxxxxxx xxxxxxxxxxxx xxx xxxxxxxxxxx xxxx. Xxx xxxxxx x xxxxxxxx xxxxxxxxx xxxx xxxxx xxxx.  </p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
            </div>
        </div>
    </div>
</div>