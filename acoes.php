<?php
session_start();
require 'connection.php';   

if (isset($_POST['create_usuario'])) 
    $nome = mysqli_real_escape_string($connection, $_POST['nome']); 
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $data_nascimento = mysqli_real_escape_string($connection, $_POST['data_nascimento']);
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($connection, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) :''; /*Usa o password_hash para criptografar a senha, existe também o password_verify para verificar a senha*/

    $sql = "INSERT INTO usuarios (nome, email, data_nascimento, senha) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";

    mysqli_query($connection, $sql);
?>