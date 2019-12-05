<div class="col-md-12">


    <title> <?= $LANG['menu'][7]['titulo'] ?> </title>
    <small style="float: right">
       <?= $LANG['disciplina']['descricao'] ?> <br>
    </small>
    <table class="table table-responsive-sm sortable">

        <tr class="bg-success text-light">

            <th><?= $LANG['disciplina']['cabecalho'][1] ?></th>
            <th><?= $LANG['disciplina']['cabecalho'][2] ?></th>
            <th><?= $LANG['disciplina']['cabecalho'][3] ?></th>
            <th>CH</th>
            <th>CD</th>
        </tr>
        <?php
            $query = mysqli_query($con, "SELECT * FROM disciplina");
            while($disciplina = mysqli_fetch_array($query)){
                $disciplina['nome'] = $SHORTNAME == 'pt_BR' ? $disciplina['nome'] : $disciplina['name'];
                $disciplina['obrigatorio'] = $disciplina['obrigatorio'] == 1 ? $LANG['disciplina']['obg_sim'] : $LANG['disciplina']['obg_nao'];
                echo "
                    <tr>
                        <td>$disciplina[codigo]</td>
                        <td>$disciplina[nome]</td>
                        <td>$disciplina[obrigatorio]</td>
                        <td>$disciplina[ch]</td>
                        <td>$disciplina[cd]</td>
                    </tr>
                ";
                $n++;
             }
         ?>
        </tbody>
    </table>
    <small style="float: right">
        <?= $LANG['disciplina']['descricao'] ?> <br>
    </small>
</div>
