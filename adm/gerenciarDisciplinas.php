<title>Gerenciamento de Alunos</title>

<script>


</script>
<div class="col-md-8"><br> <h2>Gerenciamento de Disciplinas</h2> </div>

<div class="col-md-4" style="text-align: right"><br>
    <?php
    formModal(1, "<span class='fa fa-plus'></span> Adicionar Disciplina", "outline-dark", "crudDisciplinas", "
        <small style='color: gray;'>(*) Campo obrigatório.</small><br>
        
        <label for='cd'>Código*</label>
        <input type='text' name='codigo' data-mask='AA0000' id='cd' placeholder='Código da disciplina' class='form-control' required><br>
        <label for='nome'>Nome*</label>
        <input type='text' name='nome' id='nome' placeholder='Nome da Disciplina' class='form-control' required><br>
        
        <label for='ch'>Carga Horária*</label>
        <input type='number' name='ch' id='ch' placeholder='Carga Horária' class='form-control' required><br>
        <label for='cd'>Créditos*</label>
        <input type='number' name='cd' id='ch' placeholder='Carga Horária' class='form-control' required><br>
        <label for='nome'>Disciplina Obrigatória*</label> <br>
        <div class='custom-control custom-radio custom-control-inline'>
            <input type='radio' id='customRadioInline1' name='obg' class='custom-control-input sr-only' value='1' required>
            <label class='custom-control-label' for='customRadioInline1'>Sim</label>
        </div>
        <div class='custom-control custom-radio custom-control-inline'>
            <input type='radio' id='customRadioInline2' name='obg' class='custom-control-input sr-only' value='0' required>
            <label class='custom-control-label' for='customRadioInline2'>Não</label>
        </div> <br>      
        
        
        <input type='hidden' name='enviadisciplina' value='true'>
        
        <small style='color: gray;'>(*) Campo obrigatório.</small>
    ");
    ?>
</div>

<div class="col-md-12"><br>
    <?php
    $query = mysqli_query($con, "
                SELECT 
                    *
                FROM 
                    `disciplina` 
                
            ");
    $i=0;
    if(mysqli_num_rows($query) >= 1){
        echo "
                   <table class='table table-responsive-sm'>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>CH</th>
                            <th>CD</th>
                            <th>Obrigatória</th>
                            <th>Funções</th>
                        </tr>
                ";
        while($disciplina = mysqli_fetch_array($query)){
            $obg = $disciplina['obrigatorio'] == 0 ? 'Não' : 'Sim';
            $cheked0 = $disciplina['obrigatorio'] == 0 ? "checked" : "";
            $cheked1 = $disciplina['obrigatorio'] == 1 ? "checked" : "";
            echo "
                <tr>
                    <td class='align-middle'>$disciplina[codigo]</td>
                    <td class='align-middle'>$disciplina[nome]</td>
                    <td class='align-middle'>$disciplina[ch]</td>
                    <td class='align-middle'>$disciplina[cd]</td>
                    <td class='align-middle'>$obg</td>
                    <td class='align-middle'> ";

            formModal('3'.$i, "<span class='fa fa-edit'></span> Editar", "warning text-white", "crudDisciplinas", "        
                <small style='color: gray;'>(*) Campo obrigatório.</small><br>
                
                <label for='cd'>Código*</label>
                <input type='text' name='codigo' value='$disciplina[codigo]' data-mask='AA0000' id='cd' placeholder='Código da disciplina' class='form-control' required><br>
                <label for='nome'>Nome*</label>
                <input type='text' name='nome' value='$disciplina[nome]' id='nome' placeholder='Nome da Disciplina' class='form-control' required><br>
                <label for='nome'>Nome Inglês*</label>
                <input type='text' name='name' value='$disciplina[name]' id='nome' placeholder='Nome da Disciplina' class='form-control' required><br>
                <label for='ch'>Carga Horária*</label>
                <input type='number' name='ch' value='$disciplina[ch]' id='ch' placeholder='Carga Horária' class='form-control' required><br>
                <label for='cd'>Créditos*</label>
                <input type='number' name='cd' value='$disciplina[cd]' id='cd' placeholder='Carga Horária' class='form-control' required><br>
                <label for='nome'>Disciplina Obrigatória*</label> <br>
                <div class='custom-control custom-radio custom-control-inline'>
                    <input type='radio' id='customRadioInline1' name='obg' class='custom-control-input sr-only' value='1' required  $cheked1>
                    <label class='custom-control-label' for='customRadioInline1'>Sim</label>
                </div>
                <div class='custom-control custom-radio custom-control-inline'>
                    <input type='radio' id='customRadioInline2' name='obg' class='custom-control-input sr-only' value='0' required $cheked0>
                    <label class='custom-control-label' for='customRadioInline2'>Não</label>
                </div> <br>      
                  
                
                <input type='hidden' name='alteradisciplina' value='$disciplina[codigo]'>
                
                <small style='color: gray;'>(*) Campo obrigatório.</small>
            ");
            formModal('4'.$i, "<span class='fa fa-trash'></span> Remover", "danger", "crudDisciplinas", "
                                    Você realmente deseja excluir a disciplina $disciplina[codigo]?
                                    <input type='hidden' name='removerdisciplina' value='$disciplina[codigo]'> 
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