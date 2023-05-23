<?php 
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");

if($sql->rowCount() ){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<a href="adicionar.php">ADICIONAR USUARIO</a>
<table border='1' width='100%'>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <th><?= $usuario['id']; ?></th>
            <th><?= $usuario['nome']; ?></th>
            <th><?= $usuario['email']; ?></th>
            <th>
                <a href="editar.php?id=<?= $usuario->getId()?>">Editar</a>
                <a href="excluir.php?id=<?= $usuario->getId()?>" onclick="return confirm('Tem certeza que deseja exclur ?')">Excluir</a>
            </th>
        </tr>
    <?php endforeach; ?>
    <tr>
    </tr>
</table>