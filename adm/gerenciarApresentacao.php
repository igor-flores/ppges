<title>Gerenciamento de Apresentação</title>

<script src="assets/tiny/tinymce.min.js" referrerpolicy="origin"></script>
<script src="assets/tiny/pt_BR.js"></script>
<script>tinymce.init({selector:'textarea', language: 'pt_BR', height: '500px'});</script>

<div class="col-md-8"><br> <h2>Gerenciamento de Apresentação</h2> </div>

<div class="col-md-4" style="text-align: right"><br>
    <?php
    formModal(1, "<span class='fa fa-plus'></span> Adicionar Tópico", "outline-dark", "crudApresentacao", "
        <small style='color: gray;'>(*) Campo obrigatório.</small><br>
        
        <label for='nome'>Título*</label>
        <input type='text' name='titulo' id='nome' placeholder='Título do Tópico' class='form-control' required><br>
        <label for='email'>Texto*</label>
        <textarea name='texto' style='height: 500px' placeholder='Escreva o Texto relacionado'></textarea>
        <input type='hidden' name='enviaapresentacao' value='true'>
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
            `apresentacao` 
    ");
    $i=0;
    if(mysqli_num_rows($query) >= 1){
        echo "
                   <table class='table table-responsive-sm'>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Funções</th>
                        </tr>
                ";
        while($aprs = mysqli_fetch_array($query)){
            echo "
                <tr>
                    <td class='align-middle'>$aprs[id_apresentacao]</td>
                    <td class='align-middle'>$aprs[titulo]</td>
                    <td class='align-middle'> ";
                        formModal('2'.$i, "<span class='fa fa-eye'></span> Expandir", "info", "", "
                            <b>Título:</b> $aprs[titulo]<br> 
                            <b>Texto:</b> 
                            <div class='card'>
                                <div class='card-body'>
                                    $aprs[texto]
                                </div>
                            </div>
                            <br><div class='dropdown-divider'></div><br>
                            <b>Title:</b> $aprs[title]<br> 
                            <b>Texto:</b> 
                            <div class='card'>
                                <div class='card-body'>
                                    $aprs[text]<br><br>
                                </div>
                            </div>
                        ");
                        formModal('3'.$i, "<span class='fa fa-edit'></span> Editar (Português)", "warning text-white", "crudApresentacao", "
                            <small style='color: gray;'>(*) Campo obrigatório.</small><br>
                            
                            <label for='nome'>Título*</label>
                            <input type='text' name='titulo' id='nome' placeholder='Título do Tópico' class='form-control' value='$aprs[titulo]' required><br>
                            <label for='email'>Texto*</label>
                            <textarea name='texto' placeholder='Escreva o Texto relacionado'>$aprs[texto]</textarea>
                            <input type='hidden' name='alterarapresentacao' value='$aprs[id_apresentacao]'>
                            <input type='hidden' name='language' value='pt_BR'>
                            <small style='color: gray;'>(*) Campo obrigatório.</small>
                        ");
                        formModal('31'.$i, "<span class='fa fa-edit'></span> Editar (Inglês)", "warning text-white", "crudApresentacao", "
                            <small style='color: gray;'>(*) Campo obrigatório.</small><br>
                            
                            <label for='nome'>Título*</label>
                            <input type='text' name='titulo' id='nome' placeholder='Título do Tópico' class='form-control' value='$aprs[title]' required><br>
                            <label for='email'>Texto*</label>
                            <textarea name='texto' placeholder='Escreva o Texto relacionado'>$aprs[text]</textarea>
                            <input type='hidden' name='alterarapresentacao' value='$aprs[id_apresentacao]'>
                            <input type='hidden' name='language' value='en_US'>
                            <small style='color: gray;'>(*) Campo obrigatório.</small>
                        ");
                        formModal('4'.$i, "<span class='fa fa-trash'></span> Remover", "danger", "crudApresentacao", "
                            Você realmente deseja excluir o professor $aprs[titulo]?
                            <input type='hidden' name='removerapresentacao' value='$aprs[id_apresentacao]'> 
                        ");
                    echo " </td>
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
