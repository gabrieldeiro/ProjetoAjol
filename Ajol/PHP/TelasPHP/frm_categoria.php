<?php include_once('../ConexaoPHP/categoria_pesquisa.php') ?>

    <form action="" method="post" id="frmcategoria" onsubmit="return false;" style="background-color:darkgray;">

           <div class="row mt-5">
                <div class="col-sm-6"> Nome da Categoria
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" value="<?= $nomeCategoria ?>">
                </div>
                <div class="col-sm-5"> Id da Categoria
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtId" value="<?= $idCategoria ?>">
                </div>
                <div class="col-sm-1 text-center mt-4">
                    <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa"
                    formaction="sistema.php?tela=categoria">&#128269;</button>
                </div>
           </div>

           <div class="row">
                <div class="col-sm-4"> Status
                    <select name="txtStatus" class="form-control" style="border-radius: 25px;">
                        <option value="">--Selecione um Status--</option>
                        <option value="ativo" <?= ($statusCategoria == 'ativo' ? 'selected' : "") ?>>Ativo</option>
                        <option value="inativo" <?= ($statusCategoria == 'inativo' ? 'selected' : "") ?>>Inativo</option>
                    </select>
                </div>
           </div>
           
            <div class="row mt-5">
                <div class="col-sm-11"> Descrição Categoria
                <textarea class="form-control textarea1" name="txtObs" id="txtObs" rows="5"><?= $descricaoCategoria ?></textarea>
                </div>
           </div>
                           
            <div class="row mt-3">
                <div class="col-sm-12"> Observação
                    <textarea class="form-control textarea1" name="txtObs" id="txtObs" rows="5"><?= $obsCategoria ?></textarea>
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