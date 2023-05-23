<?php
include 'conexao.php';

 $razao = $_POST['razao'];
 $fantasia = $_POST['fantasia'];
 $cnpj = $_POST['cnpj'];
 $ie = $_POST['ie'];
 $im = $_POST['im'];
 $tel = $_POST['tel'];
 $cel = $_POST['cel'];
 $cep = $_POST['cep'];
 $endereco = $_POST['endereco'];
 $numero = $_POST['numero'];
 $bairro = $_POST['bairro'];
 $cidade = $_POST['cidade'];
 $uf = $_POST['uf'];
 $complemento = $_POST['complemento'];
 $email = $_POST['email'];
 $instagram = $_POST['instagram'];
 $facebook = $_POST['facebook'];

$sql = "INSERT INTO `empresa`(`razao`, `fantasia`, `cnpj`, `ie`, `im`, `tel`, `cel`, `cep`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `complemento`, `email`, `instagram`, `facebook`) VALUES ('$razao','$fantasia','$cnpj','$ie','$im','$tel','$cel','$cep','$endereco','$numero','$bairro','$cidade','$uf','$complemento','$email','$instagram','$facebook')";
$inserir = mysqli_query($conexao,$sql);

header('Location: ../pages/forms/empresa.html');

?>