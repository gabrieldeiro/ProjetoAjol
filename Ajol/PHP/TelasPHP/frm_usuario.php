<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <title>Cadastro Usuario </title>
</head>

<body>
    <form action="" method="post" class="form-control " style="background-color: darkgray;">
        <div class="row mt-3 ">
            <div class="col-sm-6">Nome do Usuario
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
            </div>
            <div class="col-sm-3 mt-4">
                <input type="date" class="form-control" style="border-radius: 25px;" name="txtCadastro" id="txtCadastro" hidden>
            </div>
            <div class="col-sm-2"> ID do Usuario
                <input type="number" class="form-control" style="border-radius: 25px;" name="txtID" min="0">
            </div>
            <div class="col-sm-1 text-center mt-4">
                <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa" formaction="_sistema.php?tela=produto">&#128269;</button>
            </div>

        </div>

        <div class="row mt-3 ">
            <div class="col-sm-4">Cpf
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtcpf" id="txtcpf">
            </div>
            <div class="col-sm-4"> Data de Nascimento
                <input type="date" class="form-control" style="border-radius: 25px;" name="txtCadastro" id="txtCadastro">
            </div>

        </div>
        <div class="row mt-3 ">
            <div class="col-sm-4">Login
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtlogin" id="txtlogin">
            </div>
            <div class="col-sm-4"> Senha
                <input type="password" class="form-control" style="border-radius: 25px;" name="txtsenha" id="txtsenha">
            </div>
            
        </div>

    </form>

</body>

</html>