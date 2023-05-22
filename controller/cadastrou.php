<?php
include 'conexao.php';

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];

$senhaEncrip = MD5($senha);

$sql = "INSERT INTO `usuario`(`nome`,`email`,`senha`) VALUES ('$nome','$email','$senhaEncrip')";
$inserir = mysqli_query($conexao,$sql);

header('Location: ../pages/forms/validation.html')

?>