<?php
require 'config.php';

$tipo = filter_input(INPUT_POST,'tipo');
$descricao = filter_input(INPUT_POST,'descricao');
$modelo = filter_input(INPUT_POST,'modelo');
$armazenamento = filter_input(INPUT_POST,'armazenamento');
$memoria = filter_input(INPUT_POST,'memoria');
$imei = filter_input(INPUT_POST,'imei');
$novo = filter_input(INPUT_POST,'novo');
$dtcadastro = filter_input(INPUT_POST,'dtcadastro');



if($nome &&  $email){


    $sql = $pdo->prepare("SELECT * FROM produto WHERE imei = :imei");
    $sql->bindValue(':imei', $imei);
    $sql->execute();

    if($sql->rowCount() == 0){

        $sql = $pdo->prepare("INSERT INTO cliente(tipo,descricao,modelo,armazenamento,memoria,imei,novo) VALUES (:tipo,:descricao,:modelo,:armazenamento,:memoria,:imei,:novo)");
        $sql->bindValue(':tipo',$tipo);
        $sql->bindValue(':descricao',$descricao);
        $sql->bindValue(':modelo',$modelo);
        $sql->bindValue(':armazenamento',$armazenamento);
        $sql->bindValue(':memoria',$memoria); 
        $sql->bindValue(':imei',$imei);
        $sql->bindValue(':novo',$novo); 
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