<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <?php
    include_once('../ConexaoPHP/conexao.php')
     ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color: #1F5881;">
                <div class="row mt-3">
                    <div class="col-sm-1">
                        <img src="../../img/AjolIcon.png" class="img-fluid mt-2" alt="">
                    </div>
                    <div class="col-sm-1">
                        <a href="" class="btn" style="background-color: #5986A6; border-radius:10px; color:white;">Categorias</a>
                    </div>
                    <div class="col-sm-5">
                            <input type="text" placeholder="Pesquisa..." class="form-control ms-4" style="border-radius: 25px;" name="txtPesquisa" id="txtPesquisa">
                    </div>
                    <div class="col-sm-2">
                        <p style="display: inline-block; color:white">
                            <a href="">
                                <img src="../../img/icone-loupe-gris.png" class="img-fluid ms-3 me-2" style="width: 33px; height:30px" alt="">
                            </a>
                            <img src="../../img/6522516.png" class="img-fluid" style="width: 43px; height:40px" alt="">
                            Usuário
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p style="display: inline-block; color:white">
                            <img src="../../img/Carinho.png" class="img-fluid me-4" style="width: 43px; height:40px" alt="">
                            <img src="../../img/Historico.png" class="img-fluid" style="width: 43px; height:40px" alt="">
                            Histórico
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>