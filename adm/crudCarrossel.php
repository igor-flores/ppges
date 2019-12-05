<?php
//REMOVER
if(isset($_POST['remover_carrossel'])){
    $id = $_POST['remover_carrossel'];


    $query = mysqli_query($con, "SELECT image FROM carrossel WHERE id_carrossel = $id");
    $nome = mysqli_fetch_array($query);
    @unlink("../assets/images/carrossel/$nome[image]");

    $sql = "
            DELETE FROM
                carrossel
            WHERE
                id_carrossel = $id
        ";

    if(mysqli_query($con, $sql)){
        alertModal("Remoção bem sucedida!", "Carrossel removido com sucesso!");
        include("gerenciarCarrossel.php");
    }

    //ADICIONAR
}elseif(isset($_POST['alterar_carrossel'])){
    $id = $_POST['alterar_carrossel'];
    $url = $_POST['url'];

    $sql = "
            UPDATE 
                `carrossel`
            SET
                `url` = '$url'
            WHERE 
                `id_carrossel` = $id
        ";

    if(mysqli_query($con, $sql)){
        alertModal("Boa!", "Carrossel alterado com sucesso!");
    }else{
        alertModal("Merda", "Deu algum erro!");
    }
    include("gerenciarCarrossel.php");
    exit;
}elseif(isset($_POST['adicionar_carrossel'])){
    $url = addslashes($_POST['url']) == '' ? '#' : addslashes($_POST['url']);

    $foto = (date("md--his").".jpg");

    copy($_FILES["foto"]["tmp_name"], "../assets/images/carrossel/".$foto);

    include "assets/zebra/Zebra_Image.php";
    $image = new Zebra_Image();
    $image->auto_handle_exif_orientation = false;
    $image->source_path = "../assets/images/carrossel/".$foto;
    $image->target_path = "../assets/images/carrossel/".$foto;
    $image->jpeg_quality = 100;
    $image->preserve_aspect_ratio = true;
    $image->enlarge_smaller_images = true;
    $image->preserve_time = true;
    $image->handle_exif_orientation_tag = true;
    $image->resize(960, 400, ZEBRA_IMAGE_CROP_CENTER);

    $sql = "
        INSERT INTO `carrossel`(
            `image`, 
            `url` 
        )VALUES(
            '$foto',
            '$url'
        )
    ";
    if(mysqli_query($con, $sql)){
        alertModal("Boa!", "Carrossel cadastrado com sucesso!");
    }else{
        alertModal("Merda", "Deu algum erro!");
    }
    include("gerenciarCarrossel.php");
    exit;
}else{
    include("gerenciarCarrossel.php");
    exit;

}
