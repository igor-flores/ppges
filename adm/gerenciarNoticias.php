<title>Gerenciamento de Apresentação</title>

<script src="assets/tiny/tinymce.min.js" referrerpolicy="origin"></script>
<script src="assets/tiny/pt_BR.js"></script>
<script>tinymce.init({selector:'textarea', language: 'pt_BR', height: '500px'});</script>

<div class="col-md-8"><br> <h2>Gerenciamento de Informes</h2> </div>

<div class="col-md-4" style="text-align: right"><br>
    <?php
    formModal(1, "<span class='fa fa-plus'></span> Adicionar Informe", "outline-dark", "crudInformes", "
        <small style='color: gray;'>(*) Campo obrigatório.</small><br>
        <label for='nome'>PDF*</label>
        <input type='file' name='pdf' class='form-control'accept='application/pdf' required> <br>
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
            *, (
                SELECT 
                    `titulo` 
                FROM 
                    `informe` 
                WHERE 
                `idioma_shortname` = 'en_US'
            ) AS 'title',(
                SELECT 
                    `texto` 
                FROM 
                    `informe` 
                WHERE 
                `idioma_shortname` = 'en_US'
            ) AS 'text'
        FROM 
            `informe` 
        WHERE 
            `idioma_shortname` = 'pt_BR'
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
        while($informe = mysqli_fetch_array($query)){
            echo "
                <tr>
                    <td class='align-middle'>$informe[id_apresentacao]</td>
                    <td class='align-middle'>$informe[titulo]</td>
                    <td class='align-middle'> ";
            formModal('2'.$i, "<span class='fa fa-eye'></span> Expandir", "info", "", "
                            <b>Título:</b> $informe[titulo]<br> 
                            <b>Texto:</b> 
                            <div class='card'>
                                <div class='card-body'>
                                    $informe[texto]
                                </div>
                            </div>
                            <br><div class='dropdown-divider'></div><br>
                            <b>Title:</b> $informe[title]<br> 
                            <b>Texto:</b> 
                            <div class='card'>
                                <div class='card-body'>
                                    $informe[text]<br><br>
                                </div>
                            </div>
                        ");
            formModal('3'.$i, "<span class='fa fa-edit'></span> Editar (Português)", "warning text-white", "crudInformes", "
                            <small style='color: gray;'>(*) Campo obrigatório.</small><br>
                            
                            <label for='nome'>Título*</label>
                            <input type='text' name='titulo' id='nome' placeholder='Título do Tópico' class='form-control' value='$informe[titulo]' required><br>
                            <label for='email'>Texto*</label>
                            <textarea name='texto' placeholder='Escreva o Texto relacionado'>$informe[texto]</textarea>
                            <input type='hidden' name='alterarapresentacao' value='$informe[id_apresentacao]'>
                            <input type='hidden' name='language' value='pt_BR'>
                            <small style='color: gray;'>(*) Campo obrigatório.</small>
                        ");
            formModal('31'.$i, "<span class='fa fa-edit'></span> Editar (Inglês)", "warning text-white", "crudInformes", "
                            <small style='color: gray;'>(*) Campo obrigatório.</small><br>
                            
                            <label for='nome'>Título*</label>
                            <input type='text' name='titulo' id='nome' placeholder='Título do Tópico' class='form-control' value='$informe[title]' required><br>
                            <label for='email'>Texto*</label>
                            <textarea name='texto' placeholder='Escreva o Texto relacionado'>$informe[text]</textarea>
                            <input type='hidden' name='alterarapresentacao' value='$informe[id_apresentacao]'>
                            <input type='hidden' name='language' value='en_US'>
                            <small style='color: gray;'>(*) Campo obrigatório.</small>
                        ");
            formModal('4'.$i, "<span class='fa fa-trash'></span> Remover", "danger", "crudInformes", "
                            Você realmente deseja excluir o professor $informe[titulo]?
                            <input type='hidden' name='removerapresentacao' value='$informe[id_apresentacao]'> 
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
