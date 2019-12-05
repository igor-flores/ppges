<?php
//REMOVER
if(isset($_POST['remover_artigo'])){
    $id = $_POST['remover_artigo'];
    $query = mysqli_query($con, "SELECT pdf FROM artigo WHERE id_artigo = $id");
    $nome = mysqli_fetch_array($query);
    @unlink("../assets/artigos/$nome[pdf]");

    $sql = "
            DELETE FROM
                artigo
            WHERE
                id_artigo = $id
        ";

    if(mysqli_query($con, $sql)){
        alertModal("Remoção bem sucedida!", "Artigo removido com sucesso!");
        include("gerenciarArtigos.php");
        exit;
    }


}elseif(isset($_POST['alterar_artigo'])){
    $id = $_POST['alterar_artigo'];


}elseif(isset($_POST['envia_artigo'])){
    $titulo = addslashes($_POST['titulo']);
    $resumo = addslashes($_POST['resumo']);
    $abstract = addslashes($_POST['abstract']);
    $autor = $_POST['autor'];
    $pdf = (date("$autor-md--his").".pdf");
    $data = $_POST['data'];
    copy($_FILES["pdf"]["tmp_name"], "../assets/artigos/".$pdf);

    $sql = "
        INSERT INTO `artigo`(
            `titulo`, 
            `resumo`, 
            `abstract`, 
            `pdf`, 
            `data`, 
            `aluno_id_aluno` 
        )VALUES(
            '$titulo',
            '$resumo',
            '$abstract',
            '$pdf',
            '$data',
            '$autor'
        )
    ";
    if(mysqli_query($con, $sql)){
        alertModal("Boa!", "Artigo cadastrado com sucesso!");
    }else{
        alertModal("Merda", "Deu algum erro!");
    }
    include("gerenciarartigos.php");
    exit;
}else{
    include("gerenciarartigos.php");
    exit;

}
