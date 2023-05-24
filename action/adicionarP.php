<?php
require 'config.php';

$tipo = filter_input(INPUT_POST,'tipo');
$descricao = filter_input(INPUT_POST,'descricao');
$modelo = filter_input(INPUT_POST,'modelo');
$armazenamento = filter_input(INPUT_POST,'armazenamento');
$memoria = filter_input(INPUT_POST,'memoria');



if($descricao && $modelo){


    $sql = $pdo->prepare("SELECT * FROM produto WHERE codproduto = :codproduto");
    $sql->bindValue(':codproduto', $codproduto);
    $sql->execute();

    if($sql->rowCount() == 0){

        $sql = $pdo->prepare("INSERT INTO produto(tipo,descricao,modelo,armazenamento,memoria) VALUES (:tipo,:descricao,:modelo,:armazenamento,:memoria)");
        $sql->bindValue(':tipo',$tipo);
        $sql->bindValue(':descricao',$descricao);
        $sql->bindValue(':modelo',$modelo);
        $sql->bindValue(':armazenamento',$armazenamento);
        $sql->bindValue(':memoria',$memoria); 
        $sql->execute();
    
        header('Location: ../pages/forms/produto.php');
        exit;

    }
    header('Location: ../pages/forms/produto.php');
    exit;
    
}else{
    header('Location: ../pages/forms/produto.php');
    exit;
}