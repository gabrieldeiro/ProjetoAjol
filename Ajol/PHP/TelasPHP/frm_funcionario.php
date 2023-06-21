<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <h1>Cadastro funcionario <h1>
</head>

<?php include_once('../ConexaoPHP/funcionario_pesquisa.php') ?>


<body>
    <form action="" method="post" class="form-control" style="background-color: darkgray;"enctype="multipart/form-data">
        <div class="row mt-3 ">
            <div class="col-sm-2"> ID do Usuario
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtID"  >
            </div>
        
        <div class="col-sm-6">Nome do Usuario
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome" >
            </div>
                    
            <div class="col-sm-1 text-center mt-4">
                <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa" formaction="frm_funcionario.php">&#128269;</button>
            </div>
            pesquisar

        </div>

        <div class="row mt-3 ">
            <div class="col-sm-4">Cpf
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtCpf" id="txtCpf">
            </div>
            <div class="col-sm-4"> Data de Nascimento
                <input type="date" class="form-control" style="border-radius: 25px;" name="txtNascimento" id="txtNascimento">
            </div>
        
             <div class="col-mt-5">Foto funcionario
                <input type="file" class="form-control"  name="txtImg" id="txtImg">

             </div>
        </div>
        <div class="row mt-3 ">
            <div class="col-sm-4">Login
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtLogin" id="txtLogin">
            </div>
            <div class="col-sm-4"> Senha
                <input type="password" class="form-control" style="border-radius: 25px;" name="txtSenha" id="txtSenha">
            </div>
            
        </div>

        <div class="row mt-3 ">
            <div class="col-sm-4">Endereço
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtEndereco" id="txtEndereco">
            </div>
            <div class="col-sm-2"> Numero
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNumero" id="txtNumero">
            </div>

            <div class="col-sm-2">Complemento
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtComplemento" id="txtComplemento">
            </div>
            <div class="col-sm-2">Bairro
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtBairro" id="txtBairro">
           
            
        </div>
             <div class="col-sm-2">CEP
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtCep" id="txtCep">
            </div>
            
            <div class="col-sm-4">Status
                    <select name="txtStatus" class="form-control">
                        <option value="">--Selecione um Status--</option>
                        <option value="ativo" <?= ($status == 'ativo' ? 'selected' : "") ?>>Ativo</option>
                        <option value="inativo" <?= ($status == 'inativo' ? 'selected' : "") ?>>Inativo</option>
                    </select>
                </div>

                <div class="col-sm-4">Email
            <input type="email" class="form-control" style="border-radius: 25px;" name="txtEmail" id="txtEmail">
            </div>

                <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea class="form-control" name="txtObs" id="txtObs" rows="5"
                        placeholder="Observação "></textarea>
                </div>
            </div>
            
        </div>
    
        <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar"  class="btn btn-success"formaction="../ConexaoPHP/funcionario_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar"  class="btn btn-warning"formaction="../ConexaoPHP/funcionario_alterar.php">Alterar</button>
                    <button name="btoLimpar" id="btoLimpar" class="btn btn-primary" >Limpar</button><a href="funcionario_cadastrar.php"></a>
                    <button name="btoExcluir"  class="btn btn-danger"formaction="../ConexaoPHP/funcionario_excluir.php">Excluir</button>
                   
                </div>
            </div>
    
    
    </form>

</body>

</html>