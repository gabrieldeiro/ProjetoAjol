<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie a conta</title>
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

<body class="bg-secondary">
    <?php
    include_once("topo2.php");
    ?>
    <div class="container" style="border-radius: 25px;">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-md-6 border mt-5 bg-white" style="border-radius: 25px;">
                <form action="" method="post">
                    <div class="row text-center">
                        <div class="col-sm-3">

                        </div>
                        <div class="col-sm-6">
                            <h2 class="p-2 mt-2 bg-gradient" style="border-radius: 20px; background-color:#d7fb41">Crie a sua conta</h2>
                        </div>
                        <br>
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4 mb-2">
                            <h4 class="border border-1 p-2" style="border-radius: 20px;">Etapa 2 de 3</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="txtCEP" id="txtCEP" placeholder="CEP">
                            </div>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Endereço" class="form-control" name="txtEndereco" id="txtEndereco">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="txtBairro" id="txtBairro" placeholder="Bairro">
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="Cidade" name="txtCidade" id="txtCidade">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="txtEstado" id="txtEstado" placeholder="Estado">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" id="txtComplemento" class="form-control" placeholder="Complemento">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="txtNumero" id="txtNumero" placeholder="Número">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 p-2">
                        <div class="col-sm-12">
                            <div class="col-sm-6 text-start">
                                <a href="index.php" class="btn btn-danger">
                                    Voltar
                                </a>
                            </div>
                            <div class="col-sm-6 text-end">
                                <a href="crie-a-conta-3.php" class="btn btn-success">
                                    Seguinte
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>
</body>

</html>