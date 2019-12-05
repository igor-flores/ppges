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

</div>