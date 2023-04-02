<?php
    session_start();
    include("conexao.php");
    
    $_SESSION['msg'] = true;
    
    if(!empty($_GET['id'])){

        $id = $_GET['id'];

        $sql = "SELECT * FROM cadastro Where id=$id";

        $result = $conexao->query($sql);
        
        if($result->num_rows >0){
            $sqldele = "DELETE FROM cadastro WHERE id=$id";
            $resultdele = $conexao->query($sqldele);
            
        }
    }

    header('Location:re.php');
    
?>