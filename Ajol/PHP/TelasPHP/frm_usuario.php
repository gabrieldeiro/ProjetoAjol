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
    <div class="container">
        <div class="col-sm-12">
            <form action="" method="post" class="form-control " style="background-color: darkgray;">
                <div class="row mt-3 ">
                    <div class="col-sm-6">Nome do Usuario
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome"
                        value="<?$nome?>">
                    </div>
                    <div class="col-sm-3 mt-4">
                        <input type="date" class="form-control" style="border-radius: 25px;" name="txtCadastro" id="txtCadastro" hidden>
                    </div>
                    <div class="col-sm-2"> ID do Usuario
                        <input type="number" class="form-control" style="border-radius: 25px;" name="txtID" min="0"
                            value="<?=$idUsuario?>">
                    </div>
                    <div class="col-sm-1 text-center mt-4">
                        <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa" formaction="_sistema.php?tela=produto">&#128269;</button>
                    </div>

                </div>

                <div class="row mt-3 ">
                    <div class="col-sm-3">Login
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtLogin" id="txtLogin"
                        value="<?=$login?>">>
                    </div>
                    <div class="col-sm-3"> Senha
                        <input type="password" class="form-control" style="border-radius: 25px;" name="txtsenha" id="txtsenha"
                            value="<?=$senha?>">
                    </div>
                    <div class="col-sm-3"> Data de Nascimento
                        <input type="date" class="form-control" style="border-radius: 25px;" name="txtCadastro" id="txtCadastro"
                            value="<?= substr($datanascimento, 0, 10) ?>"> 
                    </div>
                    <div class="col-sm-3">CPF
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtCpf" id="txtCpf"
                            value="<?=$cpf?>"> 
                    </div>

                </div>

                <div class="row mt-3 ">
                    <div class="col-sm-3">CEP
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtCep" id="txtCep"
                            value="<?=$cep?>"> 
                    </div>
                    <div class="col-sm-5">Endereço
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtEndereço" id="txtEndereço"
                            value="<?=$endereco?>"> 
                    </div>
                    <div class="col-sm-2">Bairro
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtBairro" id="txtBairro"
                            value="<?=$endereco?>"> 
                    </div>
                    <div class="col-sm-1">Numero
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtNumero" id="txtNumero"
                            value="<?=$numero?>">
                    </div>
                    <div class="col-sm-5">Complemento
                        <textarea name="text" class="form-control" id="txtComplemento" style="border-radius: 25px;" cols="15" rows="2"></textarea
                            value="<?=$complemento?>"> 
                    </div>
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-5">Observação
                        <textarea name="textObs" class="form-control" id="txtObs" style="border-radius: 25px;" cols="15" rows="2"></textarea
                            value="<?=$obs?>">
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-3">
                            <select name="txtStatus" id="textStatus" class="form-control" style="border-radius: 25px;" >
                                    <option value="">--Selecione um Status--</option>
                                    <option value="ativo" <?= ($statususuario == 'Ativo' ? 'selected' : "") ?>>Ativo</option>
                                    <option value="inativo" <?= ($statususuario == 'Inativo' ? 'selected' : "") ?>>Inativo</option> 
                        </select>
                        </div>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 text-end">
                        <button name="btoexcluir" id="btoexcluir" class="btn btn-danger btn-lg" formaction="usuario_excluir.php">Excluir</button>
                        <button name="btoLimpar" id="btoLimpar"  class="btn btn-primary btn-lg">Limpar</button>
                        <button id="btnalterar" name="btnalterar" class="btn btn-secondary"
                            formaction="_sistema.php?tela=usuario">alterar</button>
                            <button name="btocadastrar" id="btocadastrar" class="btn btn-sucess"
                                formaction="usuario_cadastrar.php">cadastrar</button>

                     </div>
                </div>

            </form>
        </div>
    </div>

</body>

</html>