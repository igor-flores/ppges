
<?php
    if(isset($_POST['altera_dados'])){
        $pag = $_POST['pag'];
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $email2 = addslashes($_POST['confirmaemail']);
        $senha = addslashes($_POST['confirmasenha']);
        $senha = md5($senha);
        $id = $_SESSION['usuario']['id_administrador'];
        if($senha == $_SESSION['usuario']['senha']){
            if($email == $email2){
                $sql = "
                    UPDATE 
                        `administrador`
                    SET
                        `nome` = '$nome',
                        `email` = '$email'                        
                    WHERE 
                        `id_administrador` = $id
                ";
                if(mysqli_query($con, $sql)){
                    $query = mysqli_query($con, "SELECT * FROM administrador WHERE id_administrador = $id");
                    $_SESSION['usuario'] = mysqli_fetch_array($query);
                    alertModal("Boa", "Dados alterados com sucesso!");
                }else{
                    alertModal("Merda", "Deu algum erro!");
                }
            }else{
                alertModal("Poxa!", "Os emails não conferem!");
            }
        }else{
            alertModal("Poxa!", "Senha incorreta!");
        }
        include "$pag.php";

        exit;
    }else{
        header("location: .");
    }
