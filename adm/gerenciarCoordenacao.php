<title>Gerenciamento da Coordenação</title>

<script>


</script>
<div class="col-md-8"><br> <h2>Gerenciamento da Coordenação</h2> </div>

<div class="col-md-4" style="text-align: right"><br>
    <?php
    $query = mysqli_query($con, "SELECT * FROM coordenacao");
    formModal(1, "<span class='fa fa-plus'></span> Adicionar Servidor", "outline-dark", "crudCoordenacao", "
        <small style='color: gray;'>(*) Campo obrigatório.</small><br>
        
        <label for='nome'>Nome*</label>
        <input type='text' name='nome' id='nome' placeholder='Nome do Servidor' class='form-control' required><br>
        <label for='nome'>Email*</label>
        <input type='email' name='email' id='nome' placeholder='Email do Servidor' class='form-control' required><br>
        <label>Comissão*</label>
        <select name='comissao' class='form-control' required>
            <option disabled selected>- Selecione uma Comissão -</option>
            <option value='Coordenação'>Coordenação</option>
            <option value='Comissão de Pós-Graduação'>Comissão de Pós-Graduação</option>
            <option value='Comissão de Bolsas'>Comissão de Bolsas</option>
            <option value='Comissão Acompanhamento da Produção Docente'>Comissão Acompanhamento da Produção Docente</option>
            <option value='Secretário Acadêmico'>Secretário Acadêmico</option>
        </select><br>
        <label for='nome'>Cargo*</label>
        <input type='text' name='cargo' id='nome' placeholder='Cargo do Servidor' class='form-control' required><br>
        <input type='hidden' name='envia_coordenacao' value='true'>
        
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
                    `coordenacao`
                ORDER BY
                    `cargo` ASC
            ");
    $i=0;
    if(mysqli_num_rows($query) >= 1){
        echo "
           <table class='table table-responsive-sm'>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Funções</th>
                </tr>
        ";
        while($servidor = mysqli_fetch_array($query)){

            $comissao = [
                0 => $servidor['comissao'] == 'Coordenação' ? 'selected' : '',
                1 => $servidor['comissao'] == 'Comissão de Pós-Graduação' ? 'selected' : '',
                2 => $servidor['comissao'] == 'Comissão de Bolsas' ? 'selected' : '',
                3 => $servidor['comissao'] == 'Comissão Acompanhamento da Produção Docente' ? 'selected' : '',
                4 => $servidor['comissao'] == 'Secretário Acadêmico' ? 'selected' : '',
            ];
            $servidor['cargo'] = strlen($servidor['cargo']) > 15 ? substr($servidor['cargo'], 0, 30) . "..." : $servidor['cargo'];
            echo "
                <tr>
                    <td class='align-middle'>$servidor[id_coordenacao]</td>
                    <td class='align-middle'>$servidor[nome]</td>
                    <td class='align-middle'>$servidor[cargo]</td>
                    <td class='align-middle'> ";

            formModal('3'.$i, "<span class='fa fa-edit'></span> Editar", "warning text-white", "crudCoordenacao", "        
                <small style='color: gray;'>(*) Campo obrigatório.</small><br>
                <label for='nome'>Nome*</label>
                <input type='text' name='nome' value='$servidor[nome]' id='nome' placeholder='Nome do Servidor' class='form-control' required><br>
                <label for='nome'>Email*</label>
                <input type='email' value='$servidor[email]' name='email' id='nome' placeholder='Email do Servidor' class='form-control' required><br>
                <label>Comissão*</label>
                <select name='comissao' class='form-control'>        
                    <option value='Coordenação' $comissao[0]>Coordenação</option>
                    <option value='Comissão de Pós-Graduação' $comissao[1]>Comissão de Pós-Graduação</option>
                    <option value='Comissão de Bolsas' $comissao[2]>Comissão de Bolsas</option>
                    <option value='Comissão Acompanhamento da Produção Docente' $comissao[3]>Comissão Acompanhamento da Produção Docente</option>
                    <option value='Secretário Acadêmico' $comissao[4]>Secretário Acadêmico</option>
                </select><br>
                <label for='nome'>Cargo*</label>
                <input type='text' name='cargo' value='$servidor[cargo]' id='nome' placeholder='Cargo do Servidor' class='form-control' required><br>
                <input type='hidden' name='altera_servidor' value='$servidor[id_coordenacao]'>
                
                <small style='color: gray;'>(*) Campo obrigatório.</small>
            ");
            formModal('4'.$i, "<span class='fa fa-trash'></span> Remover", "danger", "crudCoordenacao", "
                Você realmente deseja excluir o servidor $servidor[nome]?
                <input type='hidden' name='remover_servidor' value='$servidor[id_coordenacao]'> 
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