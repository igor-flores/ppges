<title> <?= $LANG['menu'][4]['titulo'] ?> </title>
<div class="col-md-12"><h3> <?= $LANG['menu'][4]['titulo'] ?> </h3></div>
<script>
    function modal(nome, email, descricao, areap, lattes, research) {
        document.getElementById('phead').innerHTML = nome;
        document.getElementById('pbody').innerHTML = "<b> Nome: </b>" + nome + "<br><b>Email: </b>" + email + "<br><b> Áreas de Pesquisa: </b>" + areap + "<br><b>Descrição: </b>"+ descricao +"<br><br><b>Lattes: </b><a href='" + lattes + "' target='_blank'>" + lattes + "</a> <br><b> ResearchGate: </b> <a href='" + research + "' target='_blank'>" + research + "</a>";
    }

</script>
<?php
    $query = mysqli_query($con, "SELECT * FROM professor");
    while ($prof = mysqli_fetch_array($query)){
        $prof['foto'] = $prof['foto'] == '' ? "modelo.png" : $prof['foto'];
?>
    <div class="col-md-6" style="margin-bottom: 20px">
        <div class="card">
            <img src="assets/images/professores/<?= $prof['foto']?>" class="card-img-top" alt="..." style="height: 200px; width: 200px; margin: auto; margin-top: 10px; margin-bottom: 10px">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5 class="card-title text-center"><?= $prof['nome']?></h5></li>
                <li class="list-group-item text-justify"><?= substr($prof['descricao'], 0, 75)?>...</li>
                <li class="list-group-item">
                    <a href="<?= $prof['lattes']?>" target="_blank" class="card-link text-success">Lattes</a>
                    <?php
                        if ($prof['research'] != ''){
                            echo "<a href='$prof[research]' target='_blank' class='card-link text-success'>ResearchGate</a>";
                        }
                    ?>
                </li>
            </ul>
            <a href="#" style="color: #fff;" data-toggle="modal" data-target="#exampleModal" onclick="modal('<?= $prof['nome']?>','<?= $prof['email']?>','<?= $prof['descricao']?>', '<?= $prof['area_pesquisa']?>', '<?= $prof['lattes'] ?>', '<?= $prof['research'] ?>')">
                <div class="card-body bg-success text-center">
                    <?= $LANG['orientadores']['botao'] ?>
                </div>
            </a>
        </div>
</div>
<?php } ?>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="phead">Xxxxxx Xxxxxx</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify">
                <p id="pbody"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>