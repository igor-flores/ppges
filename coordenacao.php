<title><?= $LANG['menu'][4]['titulo'] ?></title>

<div class="col-md-12">
    <h6 style="margin-bottom: 5px; color: #3a3a3a;"> <?= $LANG['menu'][4]['titulo'] ?>:</h6>
    <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item ">
            <a class="nav-link active text-success" id="coordenacao-tab" data-toggle="tab" href="#coordenacao" role="tab" aria-controls="Coordenação" aria-selected="true"><?= $LANG['coordenacao']['cabecalho'][1] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" id="comdec-tab" data-toggle="tab" href="#comdec" role="tab" aria-controls="Comissão de Pós-Graduação" aria-selected="false"><?= $LANG['coordenacao']['cabecalho'][2] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" id="comibolsas-tab" data-toggle="tab" href="#comibolsas" role="tab" aria-controls="Comissão de Bolsas" aria-selected="false"><?= $LANG['coordenacao']['cabecalho'][3] ?></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link text-success" id="comideacam-tab" data-toggle="tab" href="#comideacam" role="tab" aria-controls="Comissão Acompanhamento da Produção Docente" aria-selected="true"><?= $LANG['coordenacao']['cabecalho'][4] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" id="secaca-tab" data-toggle="tab" href="#secaca" role="tab" aria-controls="Secretário Acadêmico" aria-selected="false"><?= $LANG['coordenacao']['cabecalho'][5] ?></a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="coordenacao" role="tabpanel" aria-labelledby="home-tab">
            <?= $LANG['coordenacao'][1]?>
        </div>
        <div class="tab-pane fade" id="comdec" role="tabpanel" aria-labelledby="profile-tab">
            <?= $LANG['coordenacao'][2]?>
        </div>
        <div class="tab-pane fade" id="comibolsas" role="tabpanel" aria-labelledby="contact-tab">
            <?= $LANG['coordenacao'][3]?>
        </div>
        <div class="tab-pane fade" id="comideacam" role="tabpanel" aria-labelledby="home-tab">
            <?= $LANG['coordenacao'][4]?>
        </div>
        <div class="tab-pane fade" id="secaca" role="tabpanel" aria-labelledby="profile-tab">
            <?= $LANG['coordenacao'][5]?>
        </div>

    </div>
</div>