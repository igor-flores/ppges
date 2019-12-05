<?php
if(!isset($_GET['pesq']) || ($_GET['pesq'] == '')){
    include 'home.php';;
}else{ ?>

    <title>Pesquisa</title>

    <h3>Pesquisa para ' <?= $_GET['pesq']?>'...</h3>

<?php } ?>