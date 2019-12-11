<title>Dashboard</title>
<div class="col-md-12"><br>
    <script type="text/javascript" src="assets/js/loader.js"></script>
    <?php
    $query = mysqli_query($con, "
        SELECT 
            `professor`.`nome`,
            (SELECT 
                COUNT(`id_aluno`) 
            FROM 
                `aluno` 
            WHERE 
                `id_professor` = `professor_id_professor`
            ) AS 'qtd'
        FROM 
            `professor`
    ");
    $dados = "";
    while($aluno = mysqli_fetch_array($query)){
        $dados = $dados ."['$aluno[nome]', '$aluno[qtd]'],";
    }
    echo "
        <script type='text/javascript'>
         
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);
    
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Nome', 'Alunos'],
                    $dados
                ]);
    
                var options = {
                    chart: {
                        title: 'Relação: alunos x artigos publicados',
                        subtitle: 'Períododo: 2019/1-2020/1',
                    },
                    bars: 'horizontal',
                    colors: '#00A54F'
                };
                
    
                var chart = new google.charts.Bar(document.getElementById('graf'));
    
                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>
    ";
    ?>
    <h2>Dashboard</h2>
    <div id="graf" style="width: 100%; height: 450px; margin: auto"></div>
    <br>
    <h3> <span class='fa fa-edit'></span> Editar Informações </h3>
    <form method="post" action=".?pag=atualizaInformacao">
        <?php
            $sql = "SELECT * FROM informacao";
            $query = mysqli_query($con, $sql);

            $info = mysqli_fetch_array($query);
        ?>
        <div class="form-row">

            <div class="col">
                <label>Conceito CAPES</label>
                <input type="number" step="0.1" name="capes" class="form-control" placeholder="CAPES" value="<?= $info['capes']?>">
            </div>
            <div class="col">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="nome@exemplo.com" value="<?= $info['email']?>">
            </div>
            <div class="col">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control" data-mask='(99) 9999-9999' placeholder="( __ ) _____-_____" value="<?= $info['telefone']?>">
            </div>
        </div><br>
        <label>Endereço</label>
        <input type="text" name="endereco" class="form-control" value="<?= $info['endereco']?>" placeholder="País da fantasia - Estado de Euforia - Cidade Polichinelo | Sítio do Pica-pau Amarelo."><br>
        <input type="hidden" name="update" value="<?= $info['update']?>">
        <button type="submit" class="btn btn-outline-success"><span class="fa fa-check"></span> Salvar</button>
        <button type="reset" class="btn btn-outline-danger"><i class="fas fa-redo-alt"></i> Resetar</button>
    </form><br>
</div>
<script src="assets/js/jquery.mask.js"></script>