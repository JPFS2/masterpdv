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


if($razao &&  $fantasia && $cnpj && $cel && $cep && $endereco && $numero && $bairro && $cidade && $uf){


    $sql = $pdo->prepare("SELECT * FROM empresa WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() == 0){

        $sql = $pdo->prepare("INSERT INTO empresa(razao,fantasia,cnpj,ie,im,tel,cel,cep,endereco,numero,bairro,cidade,uf,complemento,email,instagram,facebook) VALUES (:razao,:fantasia,:cnpj,:ie,:im,:tel,:cel,:cep,:endereco,:numero,:bairro,:cidade,:uf,:complemento,:email,:instagram,:facebook)");
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