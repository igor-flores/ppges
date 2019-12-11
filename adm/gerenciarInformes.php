<title>Gerenciamento de Apresentação</title>

<script src="assets/tiny/tinymce.min.js" referrerpolicy="origin"></script>
<script src="assets/tiny/pt_BR.js"></script>
<script>tinymce.init({selector:'textarea', language: 'pt_BR', height: '500px'});</script>

<div class="col-md-8"><br> <h2>Gerenciamento de Informes</h2> </div>
<script>
    function alfredo(input1) {
        var input2 = document.getElementById('textarea2');
        input2.value = input1.value;
    }
</script>
<div class="col-md-4" style="text-align: right"><br>
    <?php
    formModal(1, "<span class='fa fa-plus'></span> Adicionar Informe", "outline-dark", "crudInformes", "
        <small style='color: gray;'>(*) Campo obrigatório.</small><br>
        <label for='nome'>PDF</label>
        <input type='file' name='pdf' class='form-control'accept='application/pdf'> <br>
        <label for='nome'>Título*</label>
        <input type='text' name='titulo' id='nome' placeholder='Título do Informe' class='form-control' required><br>
        <label for='email'>Texto</label>
        <textarea name='texto' id='textarea' style='height: 500px' onload='alfredo(this)' placeholder='Escreva a descrição'></textarea>
        
        <input type='hidden' name='enviaInforme' value='true'>
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
            `informe` 
    ");
    $i=0;
    if(mysqli_num_rows($query) >= 1){
        echo "
           <table class='table table-responsive-sm sortable'>
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Funções</th>
                </tr>
        ";
        while($informe = mysqli_fetch_array($query)){
            echo "
                <tr>
                    <td class='align-middle'>$informe[id_informe]</td>
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
                        ");
            formModal('3'.$i, "<span class='fa fa-edit'></span> Editar (Português)", "warning text-white", "crudInformes", "
                            
                        ");
            formModal('31'.$i, "<span class='fa fa-edit'></span> Editar (Inglês)", "warning text-white", "crudInformes", "
                            
                        ");
            formModal('4'.$i, "<span class='fa fa-trash'></span> Remover", "danger", "crudInformes", "
                            Você realmente deseja excluir o informe '$informe[titulo]'?
                            <input type='hidden' name='excluiInforme' value='$informe[id_informe]'> 
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
