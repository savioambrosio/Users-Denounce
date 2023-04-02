<?php
    include("conexao.php");

    if(isset($_POST['gravar'])){
        $nome = mysqli_escape_string($conexao, $_POST['nome']);
        $numero = mysqli_escape_string($conexao, $_POST['bi']);
        $morada = mysqli_escape_string($conexao, $_POST['mora']);
        $genero= mysqli_escape_string($conexao, $_POST['generos']);
        $estado = mysqli_escape_string($conexao, $_POST['estados']);
        $tipo = mysqli_escape_string($conexao, $_POST['tipos']);
        $local = mysqli_escape_string($conexao, $_POST['local']);
        $conctato = mysqli_escape_string($conexao, $_POST['fone']);
        $descri = mysqli_escape_string($conexao, $_POST['descrik']);
        
        $sql = "INSERT INTO cadastro(nome, numero, morada, genero, tipo, estado, locale, contacto, descricao) 
                VALUES('$nome', '$numero', '$morada','$genero', '$tipo', '$estado', '$local', $conctato, '$descri')";
        
        if(mysqli_query($conexao, $sql)){
            header("location: mensagem.html");
        }
        else{
            header("location: mensagem2.html");
        }
    
    }
    mysqli_close($conexao);
?>