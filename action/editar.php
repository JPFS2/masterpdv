<?php
    require 'config.php';

    $info = [];
    $id = filter_input(INPUT_GET,'id');
    if($id){
        $sql = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){

            $info = $sql->fetch(PDO::FETCH_ASSOC);

        }else{
            header('Location: ../pages/forms/validation.php');
            exit();
        }
    }else{
        header('../pages/forms/validation.php');
        exit();
    }
?>

<h1>Editar Usuario</h1>
<form method='POST' action='editar_action.php'>
    <input type="hidden" name="id" value="<?= $info['id']?>">
    <label> Nome <br />
        <input type="text" name="nome" value="<?= $info['nome']?>">
    </label> <br /><br />
    <label> Email <br />
        <input type="email" name="email" value="<?= $info['email']?>">
    </label><br /><br />
    <label> Email <br />
        <input type="password" name="senha" value="<?= $info['senha']?>">
    </label><br /><br />
    <input type="submit" value="Editar"/>
</form>