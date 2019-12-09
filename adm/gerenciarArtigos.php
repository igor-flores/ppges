<title>Gerenciamento de Apresentação</title>

<div class="col-md-8"><br> <h2>Gerenciamento de Artigos</h2> </div>

<div class="col-md-4" style="text-align: right"><br>
    <?php
    $query = mysqli_query($con, "SELECT DISTINCT semestre FROM aluno");
    $semestre = "";
    while ($dados = mysqli_fetch_array($query)){
        $semestre = $semestre. "<option value='$dados[semestre]'> $dados[semestre] </option>";
    }
    formModal(1, "<span class='fa fa-plus'></span> Adicionar Artigo", "outline-dark", "crudArtigos", "
        <small style='color: gray;'>(*) Campo obrigatório.</small><br>
        <label for='nome'>PDF*</label>
        <input type='file' name='pdf' class='form-control'accept='application/pdf' required> <br>
        <label for='nome'>Data de Publicação*</label>
        <input type='date' name='data'class='form-control' required><br>
        <label for='nome'>Título*</label>
        <input type='text' name='titulo' id='nome' placeholder='Título do Artigo' class='form-control' required><br>
        <label for='email'>Resumo*</label>
        <textarea name='resumo' style='height: 300px' placeholder='Resumo do artigo' class='form-control' required></textarea><br>
        <label for='email'>Abstract*</label>
        <textarea name='abstract' style='height: 300px' placeholder='Abstract do artigo' class='form-control' required></textarea><br>
        <input type='hidden' name='envia_artigo' value='true'>
        <label for='email'>Semestre do Autor*</label>
        <select class='form-control semestre'>
            <option disabled selected> - Selecione um semestre -</option>
            $semestre
        </select><br>
        <label for='email'>Nome do Autor*</label>
        <select name='autor' class='form-control autor'>
            <option disabled selected> - Selecione o autor -</option>
        </select>
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
                `nome` 
            FROM 
                `aluno` 
            WHERE 
                `id_aluno` = `aluno_id_aluno`
            ) AS 'nome', (
            SELECT 
                `semestre` 
            FROM 
                `aluno` 
            WHERE 
                `id_aluno` = `aluno_id_aluno`
            ) AS 'semestre'
       FROM 
        `artigo` 
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
            $semestre = '';
            $querySemiVirgem = mysqli_query($con, "SELECT DISTINCT semestre FROM aluno");
            while ($dados = mysqli_fetch_array($querySemiVirgem)){
                if($dados['semestre'] == $aprs['aluno_id_aluno']){
                    $semestre = $semestre. "<option value='$dados[semestre]' selected> $dados[semestre] </option>";
                }else{
                    $semestre = $semestre. "<option value='$dados[semestre]'> $dados[semestre] </option>";
                }

            }
            echo "
                <tr>
                    <td class='align-middle'>$aprs[id_artigo]</td>
                    <td class='align-middle'>$aprs[titulo]</td>
                    <td class='align-middle'> ";
                    formModal('2'.$i, "<span class='fa fa-eye'></span> Expandir", "info", "", "
                        <b> Autor:</b> $aprs[nome] <br>
                        <b> Título:</b> $aprs[titulo] <br>
                        <b> Resumo: </b> $aprs[resumo] <br>
                        <a href='../assets/artigos/$aprs[pdf]' target='_blank'>Abrir PDF</a>
                    ");
            formModal('3'.$i, "<span class='fa fa-edit'></span> Editar", "warning text-white", "crudArtigos", "
                <small style='color: gray;'>(*) Campo obrigatório.</small><br>
                <label for='nome'>PDF*</label>
                <input type='file' name='pdf' class='form-control'accept='application/pdf' required> <br>
                <label for='nome'>Data de Publicação*</label>
                <input type='date' name='data'class='form-control' required><br>
                <label for='nome'>Título*</label>
                <input type='text' name='titulo' value='$aprs[titulo]' id='nome' placeholder='Título do Artigo' class='form-control' required><br>
                <label for='email'>Resumo*</label>
                <textarea name='resumo' style='height: 300px' placeholder='Resumo do artigo' class='form-control' required></textarea><br>
                <label for='email'>Abstract*</label>
                <textarea name='abstract' style='height: 300px' placeholder='Abstract do artigo' class='form-control' required></textarea><br>
                <input type='hidden' name='altera_artigo' value='true'>
                <label for='email'>Semestre do Autor*</label>
                <select class='form-control semestre'>
                    <option disabled> - Selecione um semestre -</option>
                    $semestre
                </select><br>
                <label for='email'>Nome do Autor*</label>
                <select name='autor' class='form-control autor'>
                    <option disabled selected> - Selecione o autor -</option>
                    
                </select>
                <small style='color: gray;'>(*) Campo obrigatório.</small>
            ");
            formModal('4'.$i, "<span class='fa fa-trash'></span> Remover", "danger", "crudArtigos", "
                            Você realmente deseja excluir o artigo \"$aprs[titulo]\"?
                            <input type='hidden' name='remover_artigo' value='$aprs[id_artigo]'> 
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

<script>
    $(".semestre").change(function(){
        $.ajax({
            method: "POST",
            url: "ajax.php",
            data: {
                semestre: $('.semestre').val()

            },
            success: function(data_o) {
                $(".autor").html(data_o);
            }
        })
    })
</script>