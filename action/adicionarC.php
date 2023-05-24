<?php
require 'config.php';

$nome = filter_input(INPUT_POST,'nome');
$cnpj = filter_input(INPUT_POST,'cnpj');
$cpf = filter_input(INPUT_POST,'cpf');
$ie = filter_input(INPUT_POST,'ie');
$cel = filter_input(INPUT_POST,'cel');
$cep = filter_input(INPUT_POST,'cep');
$endereco = filter_input(INPUT_POST,'endereco');
$numero = filter_input(INPUT_POST,'numero');
$bairro = filter_input(INPUT_POST,'bairro');
$cidade = filter_input(INPUT_POST,'cidade');
$uf = filter_input(INPUT_POST,'uf');
$complemento = filter_input(INPUT_POST,'complemento');
$email = filter_input(INPUT_POST,'email');


if($cnpj &&  $cpf){


    $sql = $pdo->prepare("SELECT * FROM cliente WHERE cpf = :cpf");
    $sql->bindValue(':cpf', $cpf);
    $sql->execute();

    if($sql->rowCount() == 0){

        $sql = $pdo->prepare("INSERT INTO cliente(nome,cnpj,cpf,ie,cel,cep,endereco,numero,bairro,cidade,uf,complemento,email) VALUES (:nome,:cnpj,:cpf,:ie,:cel,:cep,:endereco,:numero,:bairro,:cidade,:uf,:complemento,:email)");
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':cnpj',$cnpj);
        $sql->bindValue(':cpf',$cpf);
        $sql->bindValue(':ie',$ie); 
        $sql->bindValue(':cel',$cel);
        $sql->bindValue(':cep',$cep); 
        $sql->bindValue(':endereco',$endereco);
        $sql->bindValue(':numero',$numero); 
        $sql->bindValue(':bairro',$bairro);
        $sql->bindValue(':cidade',$cidade); 
        $sql->bindValue(':uf',$uf);
        $sql->bindValue(':complemento',$complemento); 
        $sql->bindValue(':email',$email); 
        $sql->execute();
    
        header('Location: ../pages/forms/clientes.php');
        exit;

    }
    header('Location: ../pages/forms/clientes.php');
    exit;
    
}else{
    header('Location: ../pages/forms/clientes.php');
    exit;
}