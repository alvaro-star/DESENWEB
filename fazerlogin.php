<?php
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $conexao = mysqli_connect("localhost", 'root', '', "base_estoque");

    if(!$conexao){
        die;
        echo "erro";
    }

    $sql = "SELECT cpf, senha FROM `usuario`;";
    echo $sql;
    $usuarios = $conexao->query($sql);
    echo $usuarios;
    echo mysqli_error($conexao);
    //header("Location: login.php");
?>