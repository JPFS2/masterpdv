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


    $sql = $pdo->prepare("SELECT * FROM empresa WHERE codempresa = :codempresa");
    $sql->bindValue(':codempresa', $codempresa);
    $sql->execute();

    if($sql->rowCount() == 0){

        $sql = $pdo->prepare("update empresa set razao = :razao,fantasia = :fantasia,cnpj = :cnpj,ie = :ie,im = :im,tel = :tel,cel = :cel,cep = :cep,endereco = :endereco,numero = :numero,bairro = :bairro,cidade = :cidade,uf = :uf,complemento = :complemento,email = :email,instagram = :instagram,facebook = :facebook where codempresa = 1");
        $sql->bindValue(':razao',$razao);
        $sql->bindValue(':fantasia',$fantasia);
        $sql->bindValue(':cnpj',$cnpj);
        $sql->bindValue(':ie',$ie); 
        $sql->bindValue(':im',$im);
        $sql->bindValue(':tel',$tel); 
        $sql->bindValue(':cel',$cel);
        $sql->bindValue(':cep',$cep); 
        $sql->bindValue(':endereco',$endereco);
        $sql->bindValue(':numero',$numero); 
        $sql->bindValue(':bairro',$bairro);
        $sql->bindValue(':cidade',$cidade); 
        $sql->bindValue(':uf',$uf);
        $sql->bindValue(':complemento',$complemento);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':instagram',$instagram);   
        $sql->bindValue(':facebook',$facebook);      
        $sql->execute();
    
        header('Location: ../pages/forms/empresa.php');
        exit;

    }
    header('Location: ../pages/forms/empresa.php');
    exit;
    
}else{
    header('Location: ../pages/forms/empresa.php');
    exit;
}