<?php
    include("conexao.php");

    if(isset($_POST["btn"])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mens'];
        $assunto = $_POST['assunto'];

        $sql = "INSERT INTO contacto(nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$mensagem', '$assunto')";

        if(mysqli_query($conexao, $sql)){
            header("location:mensagem.html");
        }
        else{
            header("location:mensagem3.html");
        }
    }
?>