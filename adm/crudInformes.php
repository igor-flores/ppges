<?php
    if(isset($_POST['excluiInforme'])){
        $id = $_POST['excluiInforme'];
        $sql = "
            DELETE FROM `informe` WHERE id_informe = $id
        ";
        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Informe deletado com sucesso!");
        }else{
            alertModal("Merda", "Deu algum erro!");
        }

    }elseif(isset($_POST['enviaInforme'])){
        $titulo = addslashes($_POST['titulo']);
        $title = $tr->translate($titulo);
        $texto = addslashes(strip_tags($_POST['texto']));
        $texto = str_replace("\"", "", $texto);
        $texto = str_replace("\ ", "", $texto);
        $texto = str_replace("'", "", $texto);
echo $texto;
        $text = $tr->translate($texto);
        exit;
        date_default_timezone_set("America/Sao_Paulo") ;
        $data = date("Y-m-d H:m");

        if(isset($_FILES['pdf']['tmp_name']) && $_FILES['pdf']['tmp_name'] != ''){
            $pdf = (date("md--his").".pdf");
            copy($_FILES["pdf"]["tmp_name"], "../assets/informes/".$pdf);

        }else{
            $pdf = "";
        }
        $sql = "
            INSERT INTO `informe`(
                `titulo`, 
                `title`, 
                `texto`, 
                `text`, 
                `pdf`, 
                `data` 
            )VALUES(
                '$titulo',
                '$title',
                '$texto',
                '$text',
                '$pdf',
                '$data'
            )
        ";

        exit;

        if(mysqli_query($con, $sql)){
            alertModal("Boa!", "Informe cadastrado com sucesso!");
        }else{
            alertModal("Merda", "Deu algum erro!");
        }
    }

    include("gerenciarInformes.php");
    exit;