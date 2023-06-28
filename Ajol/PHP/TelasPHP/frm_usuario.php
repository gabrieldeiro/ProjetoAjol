<?php include_once('../ConexaoPHP/usuario_pesquisa.php') ?>
<style>
    .textarea1 {
        resize: none !important;
    }
</style>
        <form action="" method="post" enctype="multipart/form-data" style="background-color: darkgray;">

            <div class="card" style="width: 18rem;">
                  <img src="../../img/usu/<?=$idUsuario?>/<?=$imgUsuario?>" class="w-50" alt="">
                <div class="card-body">
                    <input type="file" class="btn btn-primary" name="txtImg">
                </div>
            </div>
                
        
            <hr> 

            <div class="row mt-3 ">
                <div class="col-sm-6">Nome do Usuario
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome" value="<?= $nomeUsuario ?>">
                </div>
                <div class="col-sm-3 mt-4">
                    <input type="date" class="form-control" style="border-radius: 25px;" name="txtCadastro" id="txtCadastro" hidden>
                </div>
                <div class="col-sm-2"> ID do Usuario
                    <input type="number" class="form-control" style="border-radius: 25px;" name="txtId" min="0" value="<?= $idUsuario ?>">
                </div>
                <div class="col-sm-1 text-center mt-4">
                    <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa" formaction="sistema.php?tela=usuario">&#128269;</button>
                </div>

            </div>

            <div class="row mt-3 ">
                <div class="col-sm-3">Login
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtLogin" id="txtLogin" value="<?= $loginUsuario ?>">
                </div>
                <div class="col-sm-3"> Senha
                    <input type="password" class="form-control" style="border-radius: 25px;" name="txtSenha" id="txtSenha" value="<?= $senhaUsuario ?>">
                </div>
                <div class="col-sm-3"> Data de Nascimento
                    <input type="date" class="form-control" style="border-radius: 25px;" name="txtNascimento" id="txtNascimento" value="<?= substr($datanascimentoUsuario, 0, 10) ?>">
                </div>
                <div class="col-sm-3">CPF
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtCpf" id="txtCpf" value="<?= $cpfUsuario ?>">
                </div>

            </div>

            <div class="row mt-3 ">
                <div class="col-sm-6">Email
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtEmail" id="txtEmail" value="<?= $emailUsuario ?>">
                </div>


            <div class="row mt-3 ">
                <div class="col-sm-3">CEP
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtCep" id="txtCep" value="<?= $cepUsuario ?>">
                </div>
                <div class="col-sm-5">Endereço
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtEndereco" id="txtEndereco" value="<?= $enderecoUsuario ?>">
                </div>
                <div class="col-sm-2">Bairro
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtBairro" id="txtBairro" value="<?= $enderecoUsuario ?>">
                </div>
                <div class="col-sm-1">Numero
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtNumero" id="txtNumero" value="<?= $numeroUsuario ?>">
                </div>
                <div class="col-sm-5">Complemento
                    <textarea name="txtComplemento" class="form-control" id="txtComplemento" style="border-radius: 25px;" cols="15" rows="2"></textarea
                            value="<?= $complementoUsuario ?>"> 
                    </div>
                  
                    <div class="col-sm-4"> Observação
                        <textarea class="form-control textarea1" name="txtObs" id="txtObs" rows="1" placeholder="Observação " value="<?= $obsProduto ?>"></textarea>
                </div>
            </div>

                <div class="row mt-3">
                    <div class="col-sm-3">Status
                        <select name="txtStatus" id="textStatus" class="form-control" style="border-radius: 25px;">
                            <option value="">--Selecione um Status--</option>
                            <option value="ativo" <?= ($statusUsuario == 'Ativo' ? 'selected' : "") ?>>Ativo
                            </option>
                            <option value="inativo" <?= ($statusUsuario == 'Inativo' ? 'selected' : "") ?>>Inativo
                            </option>
                        </select>
                    </div>
                </div>

        


            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoexcluir" id="btoexcluir" class="btn btn-danger btn-lg" formaction="usuario_excluir.php">Excluir</button>
                    <a href="../TelasPHP/sistema.php?tela=usuario" name="btoLimpar" id="btoLimpar" class="btn btn-primary btn-lg">Limpar</a>
                    <button id="btnalterar" name="btnalterar" class="btn btn-warning btn-lg" formaction="../ConexaoPHP/usuario_alterar.php">Alterar</button>
                    <button name="btocadastrar" id="btocadastrar" class="btn btn-success btn-lg" formaction="../ConexaoPHP/usuario_cadastrar.php">Cadastrar</button>
                </div>
            </div>
    </form>
