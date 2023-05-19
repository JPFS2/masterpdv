<?php
include 'conexao.php';

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];



$sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`) VALUES ('$nome','$email','MD5($senha)')";
$inserir = mysqli_query($conexao,$sql);

header('location: ../pages/forms/validation.html')

?>