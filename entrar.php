<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boostrap.css">
    <link rel="stylesheet" href="res.css">
    <link rel="icon" href="images/ilu.png">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <section id="part2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/poli.jpg" alt="...">
                    <div class="cont text-left">
                        <div class="container">
                            <div class="card">
                                <div class="card-header text-center text-light">
                                    <p class="text-primary">Login <span class="text-light">Admin</span></p>
                                </div>
                                <div class="card-body">
                                    <form action="login.php" method="post">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label text-white"><i class="fa-solid fa-user"></i>&nbsp Nome</label>
                                            <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="inisra o seu nome" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput2" class="form-label text-white"><i class="fa-solid fa-lock"></i>&nbsp Senha</label>
                                            <input type="password" name="senha"class="form-control" id="formGroupExampleInput2" placeholder="insira a sua senha" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary text-light" name="btn"><i class="fa-solid fa-right-to-bracket"></i>&nbspEntrar</button>
                                    </form>
                                </div>
                                <div class="card-footer text-muted">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
            if(isset($_SESSION['msg'])){
    ?>
                                <div class="modal" tabindex="-1" id="myModal">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <img src="images/er.png" width="40" height="40" alt="" class="d-inline-block align-text-top"><h5 class="modal-title"><span class="text-danger">Erro</span></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-danger text-light">
                                            <p>Erro ao acessar, não tens o acesso permitido para logar no sistema senhor <?php echo $_SESSION['nome'];?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger text-light" data-bs-dismiss="modal">Voltar</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $(document) .ready(function (){
                                            $('#myModal').modal('show');
                                        
                                    });
                                </script>
    <?php
    }
        unset($_SESSION['msg']);
    ?>

</body>
</html>