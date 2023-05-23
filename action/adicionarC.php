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


if($nome &&  $email && $senha){


    $sql = $pdo->prepare("SELECT * FROM cliente WHERE cpf = :cpf");
    $sql->bindValue(':cpf', $cpf);
    $sql->execute();

    if($sql->rowCount() == 0){

        $sql = $pdo->prepare("INSERT INTO usuario(nome,email,senha) VALUES (:nome, :email,:senha)");
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':email',$email);        
        $sql->bindValue(':senha', md5($senha));
        $sql->execute();
    
        header('Location: ../pages/forms/validation.php');
        exit;

    }
    header('Location: ../pages/forms/validation.php');
    exit;
    
}else{
    header('Location: ../pages/forms/validation.php');
    exit;
}