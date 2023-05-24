<?php
require 'config.php';

$razao = filter_input(INPUT_POST,'razao');
$fantasia = filter_input(INPUT_POST,'fantasia');
$cnpj = filter_input(INPUT_POST,'cnpj');
$ie = filter_input(INPUT_POST,'ie');
$endereco = filter_input(INPUT_POST,'endereco');
$numero = filter_input(INPUT_POST,'numero');
$bairro = filter_input(INPUT_POST,'bairro');
$cidade = filter_input(INPUT_POST,'cidade');
$uf = filter_input(INPUT_POST,'uf');
$cep = filter_input(INPUT_POST,'cep');
$tel = filter_input(INPUT_POST,'tel');
$email = filter_input(INPUT_POST,'email');


if($cnpj){


    $sql = $pdo->prepare("SELECT * FROM fornecedor WHERE cnpj = :cnpj");
    $sql->bindValue(':cnpj', $cnpj);
    $sql->execute();

    if($sql->rowCount() == 0){

        $sql = $pdo->prepare("INSERT INTO fornecedor(razao,fantasia,cnpj,ie,endereco,numero,bairro,cidade,uf,cep,tel,email) VALUES (:razao,:fantasia,:cnpj,:ie,:endereco,:numero,:bairro,:cidade,:uf,:cep,:tel,:email)");
        $sql->bindValue(':razao',$razao);
        $sql->bindValue(':fantasia',$fantasia);
        $sql->bindValue(':cnpj',$cnpj);
        $sql->bindValue(':ie',$ie); 
        $sql->bindValue(':endereco',$endereco);
        $sql->bindValue(':numero',$numero); 
        $sql->bindValue(':bairro',$bairro);
        $sql->bindValue(':cidade',$cidade); 
        $sql->bindValue(':uf',$uf);
        $sql->bindValue(':cep',$cep); 
        $sql->bindValue(':tel',$tel);
        $sql->bindValue(':email',$email); 
        $sql->execute();
    
        header('Location: ../pages/forms/fornecedor.php');
        exit;

    }
    header('Location: ../pages/forms/fornecedor.php');
    exit;
    
}else{
    header('Location: ../pages/forms/fornecedor.php');
    exit;
}