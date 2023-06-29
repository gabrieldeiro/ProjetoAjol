<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <?php
    include_once('../ConexaoPHP/conexao.php');
    ?>
</head>

<body>
    <?php
    include_once('topo2.php')
    ?>
    <div class="container-fluid p-3" style="background-color: #404040;">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-6 card-body bg-white" style="border-radius: 10px;">
            <div class="col-sm-12">
                <div class="row">
                    <h4>Produtos</h4>
                    <hr>
                </div>
                <div class="row">
                    <!-- 
                        SELECT AQUI
                    -->
                    <div class="col-sm-2">
                        <img src="../../img/ace.webp" class="w-100 img-fluid" alt="">
                    </div>
                    <div class="col-sm-5">
                        <p>
                        <h4>Ace Action Figure One Piece</h4>
                        </p>
                        <div class="row ms-1">
                            <p>
                                <a href="">Excluir</a>
                                <a href="" class="ms-3">Alterar</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-2 mt-2">
                        <input type="number" class="form-control" min="1" name="" id="">
                        <h5 class="form-text ms-1">Quantidade</h5>
                    </div>
                    <div class="col-sm-2 text-end">
                        <h3 class="text-success" style="font-size: 22px; opacity:0.9">
                            4.000
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1">

        </div>
        <!-- 
            FAZER FICAR RELATIVO E SE MOVER DE ACORDO COM A TELA
        -->
        <div class="col-sm-2 card-body bg-white position-relative" style="border-radius:10px">
            <h4>Resumo de Compras</h4>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>Produtos (<?php //Quantidades ?>)</h5>
                </div>
                <div class="col-sm-6 text-end">
                    <h5>R$<?php //Valor sem frete ?></h5>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-sm-6">
                    <h5>Frete</h5>
                </div>
                <div class="col-sm-6 text-end">
                    <h5 class="text-success">R$ 20,00</h5>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12">
                    <input type="text" class="form-control" placeholder="Cupom" name="txtCupom" id="txtCupom">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-center">
                    <div class="col-sm-6">
                        <h4>
                            <b>
                                Total
                            </b>
                        </h4>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="text-success">R$<?php //Valor Total Aqui ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1">

        </div>
    </div>
</body>

</html>