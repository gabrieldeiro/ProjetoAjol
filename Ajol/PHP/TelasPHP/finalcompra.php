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
    <link rel="shortcut icon" href="../../../resto/icone.png" type="image/x-icon">

    <?php
    include_once('../ConexaoPHP/conexao.php');
    ?>
</head>

<body class="bg-secondary">

    <style>
    .perfil {
        height: 220px;
        width: 225px;
        border-radius: 200px;
    }

    .txtcompra{
        color: green;
        font-weight: bold;
        font-size: 20px;
    }
    </style>

    <?php
    include_once("topo2.php");
    ?>
    <div class="container" style="border-radius: 25px;">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-md-6 border mt-5 bg-white" style="border-radius: 25px;">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <img src="../../img/check.png" class="w-25 mt-3" alt="check">
                            <hr>
                            <p class="txtcompra">
                                Compra realizada! <br>
                                <a href="loja.php">
                                    Voltar para loja
                                </a>
                            </p>
                            
                        </div>
                    </div>
                </form>
            </div>   
        </div>  
    </div>
</body>

</html>