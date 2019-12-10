<title>Gerenciamento de Alunos</title>

<script>


</script>
<div class="col-md-8"><br> <h2>Gerenciamento de Alunos</h2> </div>

<div class="col-md-4" style="text-align: right"><br>
    <?php
    $query = mysqli_query($con, "SELECT * FROM professor");
    $select = '';
    while($prof = mysqli_fetch_array($query)){
        $select = $select."<option value='$prof[id_professor]'>$prof[nome]</option>";
    }
    if(date("m") > 6){
        $semestre = date("Y"). "/2";
    }else{
        $semestre = date("Y"). "/1";
    }
    formModal(1, "<span class='fa fa-plus'></span> Adicionar Aluno", "outline-dark", "crudAlunos", "
        <small style='color: gray;'>(*) Campo obrigatório.</small><br>
        
        <label for='nome'>Nome*</label>
        <input type='text' name='nome' id='nome' placeholder='Nome do Aluno' class='form-control' required><br>
        <label for='semestre'>Semestre*</label>
        <input type='text' name='semestre' data-mask='0000/0' id='semestre' placeholder='Ano/Semestre' class='form-control' value='$semestre' required><br>
        <label for='prof'>Professor Orientador*</label>
        <select name='prof' id='prof' class='form form-control'>
            <option selected disabled>Professor Orientador</option>
            $select
        </select>
        <input type='hidden' name='enviaaluno' value='true'>
        
        <small style='color: gray;'>(*) Campo obrigatório.</small>
    ");
    ?>
</div>

<div class="col-md-12"><br>
    <?php
    $query = mysqli_query($con, "
        SELECT 
            `aluno`.*, `professor`.`nome` AS 'orientador'
        FROM 
            aluno, professor 
        WHERE
            `aluno`.`professor_id_professor` = `professor`.`id_professor`
        ORDER BY
            `id_aluno` DESC
    ");
    $i=0;
    if(mysqli_num_rows($query) >= 1){
        echo "
                   <table class='table table-responsive-sm sortable'>
                        <tr>
                            <th>#</th>
                            <th>Semestre</th>
                            <th>Nome</th>
                            <th>Orientador</th>
                            <th>Funções</th>
                        </tr>
                ";
        while($aluno = mysqli_fetch_array($query)){
            echo "
                <tr>
                    <td class='align-middle'>$aluno[id_aluno]</td>
                    <td class='align-middle'>$aluno[semestre]</td>
                    <td class='align-middle'>$aluno[nome]</td>
                    <td class='align-middle'>$aluno[orientador]</td>
                    <td class='align-middle'> ";

            formModal('3'.$i, "<span class='fa fa-edit'></span> Editar", "warning text-white", "crudAlunos", "        
                <label for='nome'>Nome*</label>
                <input type='text' name='nome' value='$aluno[nome]' id='nome' placeholder='Nome do Aluno' class='form-control' required><br>
                <label for='semestre'>Semestre*</label>
                <input type='text' name='semestre' value='$aluno[semestre]' data-mask='0000/0' id='semestre' placeholder='Ano/Semestre' class='form-control' required><br>
                <label for='prof'>Professor Orientador*</label>
                <select name='prof' id='prof' class='form form-control'>
                    <option disabled>Professor Orientador</option>
                    <option value='$aluno[professor_id_professor]' selected>$aluno[orientador]</option>
                    $select
                </select>
                <input type='hidden' name='alteraaluno' value='$aluno[id_aluno]'>
                <small style='color: gray;'>(*) Campo obrigatório.</small>
            ");
            formModal('4'.$i, "<span class='fa fa-trash'></span> Remover", "danger", "crudAlunos", "
                                    Você realmente deseja excluir o aluno $aluno[nome]?
                                    <input type='hidden' name='removeraluno' value='$aluno[id_aluno]'> 
                                ");
            echo "
                                </td>
                        </tr>
                    ";
            $i++;
        }
    }else{
        echo "Nenhum registro encontrado!";
    }
    ?>
    </table>
</div>
<script src="assets/js/jquery.mask.js"></script>