<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php
    include_once('../ConexaoPHP/conexao.php');
    include_once('../ConexaoPHP/loginautenticar.php');
    ?>
</head>

<body>
    <div class="container-fluid">

        <?php
        include_once('topo.php');
        ?>

        <div class="row">
            <div class="col-sm-12" style="min-height:550px; background-color:darkgray">
                <?php
                if (isset($_GET['tela'])) {
                    if ($_GET['tela'] == 'usuario') {
                        include_once('frm_usuario.php');
                    }
                    if ($_GET['tela'] == 'produto') {
                        include_once('frm_produto.php');
                    }
                    if ($_GET['tela'] == 'categoria') {
                        include_once('frm_categoria.php');
                    }
                    if ($_GET['tela'] == 'funcionario') {
                        include_once('frm_funcionario.php');
                    }
                }
                ?>
            </div>
        </div>
        <div class="row" style="background-color:#783ebf;">
            <div class="col-sm-5">

            </div>
            <div class="col-sm-2 mt-3 mb-3">
                <a href="index.php" class="btn btn-danger bg-gradient form-control">
                    Sair
                </a>
            </div>
            <div class="col-sm-4">

            </div>
        </div>
    </div>
</body>

</html>