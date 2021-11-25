<?php
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $conexao = mysqli_connect("localhost", 'root', '', "base_estoque");

    if(!$conexao){
        die;
        echo "erro";
    }
$sql = "INSERT INTO usuario "."(`id_user`, `nome_user`, `cpf`, `senha`, `e-mail`) VALUES (NULL, '$nome', '$cpf', '$senha', '$email')";
//$sql = "select * from usuario";
ECHO $sql;
$produtos =$conexao->query($sql);
echo mysqli_error($conexao);
header("Location: login.php");
?>