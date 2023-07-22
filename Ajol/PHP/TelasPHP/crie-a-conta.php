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
                            <h4 class="border border-1 p-2" style="border-radius: 20px;">Etapa 1 de 3</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login">
                            </div>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Senha">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="txtNome" id="txtNome" maxlength="20" placeholder="Nome">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email">
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
                            <div class="col-sm-3 text-end">
                                <button name="btocadastrar" id="btocadastrar" class="btn btn btn-warning" formaction="../ConexaoPHP/crie_contatela1_home.php">Pré <abbr title="Faça o pré cadastro e termine mais tarde :)"> Cadastrar</abbr></button>                                                                              
                            </div>
                            <div class="col-sm-3 text-end">
                                <button name="btocadastrar" id="btocadastrar" class="btn btn btn-success" formaction="../ConexaoPHP/crie_contatela1.php">Seguinte</button>       
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>
</body>

</html>