<title>Gerenciamento de Carrossel</title>

<script>


</script>
<div class="col-md-8"><br> <h2>Gerenciamento de Carrossel</h2> </div>

<div class="col-md-4" style="text-align: right"><br>
    <?php
    $query = mysqli_query($con, "SELECT * FROM carrossel");
    formModal(1, "<span class='fa fa-plus'></span> Adicionar Carrossel", "outline-dark", "crudCarrossel", "
        <small style='color: gray;'>(*) Campo obrigatório.</small><br>
        
        <label for='nome'>Imagem*</label>
        <input type='file' name='foto' id='nome' class='form-control' required>
        <small style='color: gray;'>Resolução sugerida: 960 x 400</small><br>
        <label for='nome'>Url</label>
        <input type='url' name='url' id='nome' placeholder='Link' class='form-control'><br>
        <input type='hidden' name='adicionar_carrossel' value='true'> 
        
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
                    `carrossel`
                ORDER BY
                    `id_carrossel` ASC
            ");
    $i=0;
    if(mysqli_num_rows($query) >= 1){
        echo "
           <table class='table table-responsive-sm'>
                <tr>
                    <th>#</th>
                    <th>Imagem</th>
                    <th>Funções</th>
                </tr>
        ";
        while($carrossel = mysqli_fetch_array($query)){

            echo "
                <tr>
                    <td class='align-middle'>$carrossel[id_carrossel]</td>
                    <td class='align-middle'><img src='../assets/images/carrossel/$carrossel[image]' style='width: 100px' alt='$carrossel[id_carrossel]'> </td>
                    
                    <td class='align-middle'> ";

            formModal('3'.$i, "<span class='fa fa-edit'></span> Editar", "warning text-white", "crudCarrossel", "        
                <small style='color: gray;'>(*) Campo obrigatório.</small><br>
                <label for='nome'>Url</label>
                <input type='url' name='url' id='nome' placeholder='Link' value='$carrossel[url]' class='form-control' required><br>
                <input type='hidden' name='alterar_carrossel' value='$carrossel[id_carrossel]'>
                <small style='color: gray;'>(*) Campo obrigatório.</small>
            ");
            formModal('4'.$i, "<span class='fa fa-trash'></span> Remover", "danger", "crudCarrossel", "
                Você realmente deseja excluir esse carrossel?
                <input type='hidden' name='remover_carrossel' value='$carrossel[id_carrossel]'> 
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