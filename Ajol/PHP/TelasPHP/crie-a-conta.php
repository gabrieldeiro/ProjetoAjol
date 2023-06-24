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

<body>
    <div class="container border border-secondary mt-4" style="border-radius: 25px;">
        <form action="" method="post">
            <div class="row text-center">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-6">
                    <h2 class="p-2 mt-2 border border-1 bg-gradient bg-primary" style="border-radius: 20px;">Crie a sua conta</h2>
                </div>
                <br>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4 mb-2">
                    <h4 class="border border-1 p-2" style="border-radius: 20px;">Etapa 1 de 3</h4>
                </div>
            </div>

            <!-- 
                Formulário
            -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <input type="text" maxlength="100" class="form-control" id="txtNome" name="txtNome" placeholder="Nome completo">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" maxlength="100" class="form-control" id="txtCPF" name="txtCPF" placeholder="CPF">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <input type="text" maxlength="100" class="form-control" id="txtLogin" name="txtLogin" placeholder="Login">
                    </div>
                    <div class="col-sm-3">
                        <input type="password" maxlength="100" class="form-control" id="txtSenha" name="txtSenha" placeholder="Senha">
                    </div>
                    <div class="col-sm-4">
                        <input type="email" maxlength="100" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email">
                    </div>
                </div>
            </div>

    </div>
    </div>
    </form>
</body>

</html>