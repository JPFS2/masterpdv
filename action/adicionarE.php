<?php
require 'config.php';

$razao = filter_input(INPUT_POST,'razao');
$fantasia = filter_input(INPUT_POST,'fantasia');
$cnpj = filter_input(INPUT_POST,'cnpj');
$ie = filter_input(INPUT_POST,'ie');
$im = filter_input(INPUT_POST,'im');
$tel = filter_input(INPUT_POST,'tel');
$cel = filter_input(INPUT_POST,'cel');
$cep = filter_input(INPUT_POST,'cep');
$endereco = filter_input(INPUT_POST,'endereco');
$numero = filter_input(INPUT_POST,'numero');
$bairro = filter_input(INPUT_POST,'bairro');
$cidade = filter_input(INPUT_POST,'cidade');
$uf = filter_input(INPUT_POST,'uf');
$complemento = filter_input(INPUT_POST,'complemnto');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$instagram = filter_input(INPUT_POST,'instagram');
$facebook = filter_input(INPUT_POST,'facebook');


if($nome &&  $email && $senha){


    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() == 0){

        $sql = $pdo->prepare("INSERT INTO usuario(nome,email,senha) VALUES (:nome, :email,:senha)");
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':email',$email);        
        $sql->bindValue(':senha', md5($senha));
        $sql->execute();
    
        header('Location: ../pages/forms/validation.html');
        exit;

    }
    header('Location: ../pages/forms/validation.html');
    exit;
    
}else{
    header('Location: ../pages/forms/validation.html');
    exit;
}