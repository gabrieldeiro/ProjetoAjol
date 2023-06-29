<?php include_once('../ConexaoPHP/categoria_pesquisa.php') ?>
<div class="row mt-3">
    <div class="col-sm-12">
        <h1>Categoria</h1>
    </div>
</div>

<form action="" method="post" id="frmcategoria" onsubmit="return false;" style="background-color: darkgray;">
    <div class="row mt-3">
        <div class="col-sm-4">
            <input type="text" class="form-control" style="border-radius: 25px;" name="txtId" placeholder="ID categoria" value="<?= $idCategoria ?>">
            <!--este id esta no categoria pesquisa-->
        </div>

        <div class="row mt-3">
            <div class="col-sm-4">
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" placeholder="nome categoria" value="<?= $nomeCategoria ?>">
            </div>
            <div class="col-sm-4">
                <button class="btn btn-primary" name="btopesquisar" id="btopesquisar" formaction="sistema.php?tela=categoria">&#128269;</button>

            </div>

            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtDescricao" placeholder="descricao categoria" value="<?= $descricaoCategoria ?>">

                </div>



                <div class="col-sm-4">
                    <select name="txtStatus" class="form-control">
                        <option value="">--Selecione um Status--</option>
                        <option value="ativo" <?= ($statusCategoria == 'ativo' ? 'selected' : "") ?>>Ativo</option>
                        <option value="inativo" <?= ($statusCategoria == 'inativo' ? 'selected' : "") ?>>Inativo</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea class="form-control" name="txtObs" id="txtObs" rows="5" placeholder="Observação "><?= $obsCategoria ?></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" class="btn btn-success" formaction="../ConexaoPHP/categoria_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" class="btn btn-warning" formaction="../ConexaoPHP/categoria_alterar.php">Alterar</button>
                    <a href="sistema.php?tela=categoria" class="btn btn-primary" name="btoLimpar" id="btoLimpar" class="btn btn-secundary">Limpar</a>
                    <button name="btoExcluir" class="btn btn-danger" formaction="../ConexaoPHP/categoria_excluir.php">Excluir</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    let formulario = document.getElementById("frmcategoria");
    let id =document.getElementById("txtId");

    function Pesquisar()
    {
        if(id.value.trim()=="")
        {
            alert("Erro, o codigo deve ser preenchido");
            id.focus();
            return;
        }

        formulario.action = "sistema.php?tela=categoria";
        formulario.submit();

    }

</script>