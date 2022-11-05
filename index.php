<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - UPDATE</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Editar Usuário</h2>
    <?php

    $id = 1;
    $nome = "Cesar 1";
    $email = "cesar1@celke.com.br";

    $query_usuario = "UPDATE usuarios 
                    SET nome=:nome, email=:email 
                    WHERE id=:id
                    LIMIT 1";
    $up_usuario = $conn->prepare($query_usuario);
    $up_usuario->bindParam(':nome', $nome, PDO::PARAM_STR);
    $up_usuario->bindParam(':email', $email, PDO::PARAM_STR);
    $up_usuario->bindParam(':id', $id, PDO::PARAM_INT);

    if($up_usuario->execute()){
        echo "Usuário editado com sucesso!";
    }else{
        echo "Erro: Usuário não editado com sucesso!";
    }

    ?>
</body>

</html>