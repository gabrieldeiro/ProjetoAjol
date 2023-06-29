<?php include_once('../ConexaoPHP/funcionario_pesquisa.php') ?>

<!-- os que estao no value estao na variavel de funcionario_pesquisa -->

<form action="" method="post" style="background-color: darkgray;" enctype="multipart/form-data">
    <div class="row">
         <div class="col-sm-4 mt-3">
            <img src="../../img/fun/<?=$idFuncionario ?>/<?=$imgFuncionario?>" alt="imagem funcionario" class="w-50 "> 
        </div>
    </div>

    <div class="row mt-3 ">
        <div class="col-sm-2"> ID do Fnucionario
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtId" id="txtId" value="<?= $idFuncionario ?>">
        </div>

        <div class="col-sm-6">Nome do Funcionario
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome" value="<?= $nomeFuncionario ?>">
        </div>

        <div class="col-sm-1 text-center mt-4">
            <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa" formaction="sistema.php?tela=funcionario">&#128269;</button>
        </div>
    </div>

    <div class="row mt-3 ">
        <div class="col-sm-4">CPF
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtCpf" id="txtCpf" value="<?= $cpfFuncionario ?>">
        </div>
        <div class="col-sm-4"> Data de Nascimento
            <input type="date" class="form-control" style="border-radius: 25px;" name="txtNascimento" id="txtNascimento" value="<?= $datanascimentoFuncionario ?>">
        </div>

        <div class="col-mt-5">Foto funcionario
            <input type="file" class="form-control" name="txtImg" id="txtImg">

        </div>
    </div>
    <div class="row mt-3 ">
        <div class="col-sm-4">Login
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtLogin" id="txtLogin" value="<?= $loginFuncionario ?>">
        </div>
        <div class="col-sm-4"> Senha
            <input type="password" class="form-control" style="border-radius: 25px;" name="txtSenha" id="txtSenha" value="<?= $senhaFuncionario ?>">
        </div>

    </div>

    <div class="row mt-3 ">
        <div class="col-sm-4">Endereço
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtEndereco" id="txtEndereco" value="<?= $enderecoFuncionario ?>">
        </div>
        <div class="col-sm-2"> Numero
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtNumero" id="txtNumero" value="<?= $numeroFuncionario ?>">
        </div>

        <div class="col-sm-2">Complemento
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtComplemento" id="txtComplemento" value="<?= $complementoFuncionario ?>">
        </div>
        <div class="col-sm-2">Bairro
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtBairro" id="txtBairro" value="<?= $bairroFuncionario ?>">


        </div>
        <div class="col-sm-2">CEP
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtCep" id="txtCep" value="<?= $cepFuncionario ?>">
        </div>

        <div class="col-sm-4">Status
            <select name="txtStatus" class="form-control">
                <option value="">--Selecione um Status--</option>
                <option value="ativo" <?= ($statusFuncionario == 'ativo' ? 'selected' : "") ?>>Ativo</option>
                <option value="inativo" <?= ($statusFuncionario == 'inativo' ? 'selected' : "") ?>>Inativo</option>
            </select>
        </div>

        <div class="col-sm-4">Email
            <input type="email" class="form-control" style="border-radius: 25px;" name="txtEmail" id="txtEmail" value="<?= $emailFuncionario ?>">
        </div>

        <div class="row mt-3">
            <div class="col-sm-12">Observação
            <textarea class="form-control textarea1" name="txtObs" id="txtObs" style="border-radius: 25px;" rows="1" value="<?= $obsFuncionario ?>"></textarea>            </div>
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-sm-12 text-end">
            <button name="btoCadastrar" class="btn btn-success" formaction="../ConexaoPHP/funcionario_cadastrar.php">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning" formaction="../ConexaoPHP/funcionario_alterar.php">Alterar</button>
            <a href="sistema.php?tela=funcionario" name="btoLimpar" id="btoLimpar" class="btn btn-secondary">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger" formaction="../ConexaoPHP/funcionario_excluir.php">Excluir</button>

        </div>
    </div>
</form>