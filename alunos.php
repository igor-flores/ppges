<title> <?= $LANG['menu'][8]['titulo'] ?> </title>

<div class="col-md-12">
    <h3> <?= $LANG['menu'][8]['titulo'] ?> </h3>
    <div class="accordion" id="accordionExample">
        <?php
            $i = 0;
            $query = mysqli_query($con, "SELECT DISTINCT `semestre` FROM `aluno` ORDER BY `semestre` DESC");

            while($semestre = mysqli_fetch_array($query)){
                $show = $i == 0 ? "show" : "";
                echo "<div class='card'>
                    <div class='card-header' id='headingOne'>
                        <h2 class='mb-0'>
                            <button class='btn btn-link text-success' type='button' data-toggle='collapse' data-target='#collapse$i' aria-expanded='true' aria-controls='collapse$i'>
                                $semestre[semestre]
                            </button>
                        </h2>
                    </div>
                    <div id='collapse$i' class='collapse $show' aria-labelledby='headingOne' data-parent='#accordionExample'>
                        <div class='card-body'>
                            <table class='table table-responsive-sm sortable'>
                                <tbody> 
                                    <tr class='bg-success text-white'>
                                        <td>Nº</td>
                                        <td>
                                            ".$LANG['alunos']['tabela'][1]."
                                        </td>
                                        <td>
                                            ".$LANG['alunos']['tabela'][2]."
                                        </td>
                                    </tr>";
                                    $j = 0;
                                    $query_aluno = mysqli_query($con, "SELECT *, (SELECT `nome` FROM `professor` WHERE `professor_id_professor` = `id_professor`) AS 'professor' FROM `aluno` WHERE semestre = '$semestre[semestre]'");
                                    while ($aluno = mysqli_fetch_array($query_aluno)){
                                        $j++;
                                        echo"
                                            <tr>
                                                <td>
                                                    <p>$j</p>
                                                </td>
                                                <td>
                                                    <p>$aluno[nome]</p>
                                                </td>
                                                <td>
                                                    <p>$aluno[professor]</p>
                                                </td>
                                            </tr>
                                        ";
                                    }


                                echo " </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>";
                $i++;
            }
        ?>

    </div>
</div>
</div>