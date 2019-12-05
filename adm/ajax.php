<?php
    include_once "../conexao.php";
    $semestre = $_POST['semestre'];
    $query = mysqli_query($con, "SELECT * FROM aluno WHERE semestre = '$semestre'");
    echo "<option disabled selected> - Selecione o autor -</option>";
    while($dados = mysqli_fetch_array($query)){
        echo "<option value='$dados[id_aluno]'>$dados[nome]</option>";
    }
?>