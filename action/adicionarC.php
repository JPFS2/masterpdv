<?php
require 'config.php';

$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST,'senha');

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
    
        header('Location: ../pages/forms/validation.php');
        exit;

    }
    header('Location: ../pages/forms/validation.php');
    exit;
    
}else{
    header('Location: ../pages/forms/validation.php');
    exit;
}