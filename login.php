<?php
session_start();
include('conexao.php'); //buscar a conexao

// se estiver vazio vai retornar a pagina
if(isset($_POST['btn'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT nome FROM login WHERE nome='$nome' AND senha='$senha' ";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado)>0){
        $_SESSION['nome'] = $nome;
        header("location:re.php");
    }
    else{
        $_SESSION['nome'] = $nome;
        $_SESSION['msg'] = True;
        
        header("location:entrar.php");
    }
}
else{
    header("location:entrar.php");
}
mysqli_close($conexao);
?>