<?php
    session_start();
    include('conexao.php');

    $sql = "SELECT * FROM cadastro ORDER BY id";

    $result = $conexao->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boostrap.css">
    <link rel="stylesheet" href="consulta.css">
    <link rel="icon" href="images/ilu.png">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Confirmar Matricula</title>
</head>
<body>
    <section id="part2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/poli.jpg" alt="...">
                    <div class="cara text-center">
                        <h5 class="text-light">Agente <span class="text-primary"><?php echo $_SESSION['nome'];?></span></h5></p>
                    </div>
                    <div class="cas">
                        <a class="btn btn-primary" href="entrar.php"><i class="fa-solid fa-right-from-bracket"></i>&nbspSair</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="con container-fluid">
        <div class="input-group mb-3">
            <h5 class="text-dark pt-6"><i class="fa fa-search text-primary" aria-hidden="true"></i> Consultar <span class="text-primary">Denúncias</span></h5>
        </div>
    </div>
    <div class="fc col-md-2">
        <div class="input-group">
            <input type="search" class="form-control" id="pesquisar" placeholder="pesquisar">
            <span class="input-group-text bg-primary"><i class="fa fa-search text-light" aria-hidden="true"></i></span>
        </div>
    </div>
    <section id = "part3">
            <div class="table-responsive col-lg-12">
                <table class="table table-dark table-striped table-hover table-borderless table-bg">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Bilhete</th>
                        <th scope="col">Morada</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Tipo de Denúncia</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Local</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">...</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>".$user_data['id']."</td>";
                                echo "<td>".$user_data['nome']."</td>";
                                echo "<td>".$user_data['numero']."</td>";
                                echo "<td>".$user_data['morada']."</td>";
                                echo "<td>".$user_data['genero']."</td>";
                                echo "<td>".$user_data['tipo']."</td>";
                                echo "<td>".$user_data['estado']."</td>";
                                echo "<td>".$user_data['locale']."</td>";
                                echo "<td>".$user_data['contacto']."</td>";
                                echo "<td>".$user_data['descricao']."</td>";
                                echo "<td>
                                    <a class='btn btn-sm btn-danger' href='excluir.php?id=$user_data[id]'>
                                        <i class='fa fa-trash' aria-hidden='true'></i>
                                    </a>
                                </td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
    </section>
    <?php
        if(isset($_SESSION['msg'])){
        ?>
                                <div class="modal" tabindex="-1" id="myModal">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <img src="images/verificar-removebg-preview.png" width="40" height="40" alt="" class="d-inline-block align-text-top"><h5 class="modal-title"><span class="text-success">Bingo!</span></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-success text-light">
                                            <p>Os dados foram excluidos com sucesso senhor  <?php echo $_SESSION['nome'];?>..</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success text-light" data-bs-dismiss="modal">OK</button>
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
<script>
    $(document).ready(function(){
    $("#pesquisar").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
</script>
</html>