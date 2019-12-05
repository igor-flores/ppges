<style>
    small{
        color:  #414141;
    }
</style>

<title> <?= $LANG['menu'][2]['titulo'] ?> </title>
<div class="col-md-12">
    <h3> <?= $LANG['menu'][2]['titulo'] ?> </h3>
    <?php $n = 1;
    while(isset($LANG['informes'][$n])){ ?>
        <div class="card">
            <div class="card-header bg-success text-white"><?= $LANG['informes'][$n]['titulo'] ?></div>
            <div class="card-body">
                <small class="card-title"><?= $LANG['informes'][$n]['data'] ?></small>
                <p class="card-text text-justify"><?= $LANG['informes'][$n]['conteudo'] ?></p>
            </div>
            <a href="<?= $LANG['informes'][$n]['url'] ?>"><div class="card-footer bg-transparent text-success"> <?= $LANG['informes']['botao'] ?> </div></a>
        </div> <br>
        <?php  $n++;
    } ?>
</div>