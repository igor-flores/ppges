<title>Gerenciamento de Professores</title>

<div class="col-md-8"><br> <h2>Gerenciamento de Professores</h2> </div>

<div class="col-md-4" style="text-align: right"><br>
    <?php
    formModal(1, "<span class='fa fa-plus'></span> Adicionar Professor", "outline-dark", "crudProfessores", "
        <small style='color: gray;'>(*) Campo obrigatório.</small><br>
        
        <label for='foto'>Foto</label>
        <input type='file' name='foto' id='foto' class='form-control'><br>
        <label for='nome'>Nome*</label>
        <input type='text' name='nome' id='nome' placeholder='Nome do Professor' class='form-control' required><br>
        <label for='email'>Email*</label>
        <input type='email' name='email' id='email' placeholder='Email do Professor' class='form-control' required><br>
        <label for='descricao'>Descrição*</label>
        <textarea placeholder='Descrição do Professor' name='descricao' id='descricao' class='form-control' required></textarea><br>
        <label for='nome'>Áreas de Pesquisa*</label>
        <input type='text' name='areaPesquisa' id='nome' placeholder='Áreas de Pesquisa' class='form-control' required><br>
        <label for='lattes'>Currículo Lattes*</label>
        <input type='url' name='lattes' id='lattes' placeholder='Url Lattes' class='form-control' required><br>
        <label for='res'>Research</label>
        <input type='url' name='research' id='res' placeholder='Url Research' class='form-control'><br>
        <input type='hidden' name='adicionar' value='true'>
        
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
                    professor
            ");
            $i=0;
            if(mysqli_num_rows($query) >= 1){
                echo "
                   <table class='table table-responsive-sm'>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>Funções</th>
                        </tr>
                ";
                while($prof = mysqli_fetch_array($query)){
                    $prof['foto'] = $prof['foto'] == '' ? 'modelo.png' : $prof['foto'];
                    echo "
                        <tr>
                            <td class='align-middle'>$prof[id_professor]</td>
                            <td class='align-middle'><img src='../assets/images/professores/$prof[foto]' style='height: 100px' alt='$prof[id_professor]'> </td>
                            <td class='align-middle'>$prof[nome]</td>
                            <td class='align-middle'> ";
                                formModal('2'.$i, "<span class='fa fa-eye'></span> Expandir", "info", "", "
                                    <b>Nome:</b> $prof[nome]<br> 
                                    <b>Email:</b> $prof[email]<br> 
                                    <b>Descrição:</b> $prof[descricao]<br> 
                                    <b>Descrição (inglês):</b> $prof[description]<br> 
                                    <b>Lattes:</b> <a href='$prof[lattes]'> $prof[lattes]</a> <br>
                                    <b>Research:</b><a href='$prof[research]'> $prof[research]</a> <br>
                                ");
                                formModal('3'.$i, "<span class='fa fa-edit'></span> Editar", "warning text-white", "crudProfessores", "
                                    <label for='nome'>Foto</label>
                                    <input type='file' name='foto' id='nome' class='form-control'><br>
                                    <label for='nome'>Nome*</label>
                                    <input type='text' name='nome' value='$prof[nome]' id='nome' placeholder='Nome do Professor' class='form-control' required><br>
                                    <label for='email'>Email*</label>
                                    <input type='email' name='email' value='$prof[email]' id='email' placeholder='Email do Professor' class='form-control' required><br>
                                    <label for='descricao'>Descrição*</label>
                                    <textarea placeholder='Descrição do Professor' name='descricao' id='descricao' class='form-control' style='height: 200px' required>$prof[descricao]</textarea><br>
                                    <label for='descricao'>Descrição Inglês*</label>
                                    <textarea placeholder='Descrição do Professor' name='description' id='descricao' class='form-control' style='height: 200px' required>$prof[description]</textarea><br>
                                    <label for='nome'>Áreas de Pesquisa*</label>
                                    <input type='text' name='areaPesquisa' value='$prof[area_pesquisa]' id='nome' placeholder='Áreas de Pesquisa' class='form-control' required><br>
    
                                    <label for='lattes'>Currículo Lattes*</label>
                                    <input type='url' name='lattes' value='$prof[lattes]' id='lattes' placeholder='Url Lattes' class='form-control' required><br>
                                    <label for='res'>Research</label>
                                    <input type='url' name='research' value='$prof[research]' id='res' placeholder='Url Research' class='form-control'><br>
                                    <input type='hidden' name='alterar_professor' value='$prof[id_professor]'><br>
                                    
                                    <small style='color: gray;'>(*) Campo obrigatório.</small>
                                ");
                                formModal('4'.$i, "<span class='fa fa-trash'></span> Remover", "danger", "crudProfessores", "
                                    Você realmente deseja excluir o professor $prof[nome]?
                                    <input type='hidden' name='remover' value='$prof[id_professor]'> 
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