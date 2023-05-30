<?php
require 'config.php';

$moeda = filter_input(INPUT_POST,'moeda');


if($codpagamento){


    $sql = $pdo->prepare("SELECT * FROM pagamento WHERE codpagamento = :codpagamento");
    $sql->bindValue(':codpagamento', $codpagamento);
    $sql->execute();

    if($sql->rowCount() == 0){

        $sql = $pdo->prepare("INSERT INTO pagamento(moeda) VALUES (:moeda)");
        $sql->bindValue(':nome',$moeda);
        
        $sql->execute();
    
        header('Location: ../pages/forms/moeda.php');
        exit;

    }
    header('Location: ../pages/forms/moeda.php');
    exit;
    
}else{
    header('Location: ../pages/forms/moeda.php');
    exit;
}