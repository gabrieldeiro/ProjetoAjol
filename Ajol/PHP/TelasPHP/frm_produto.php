<?php include_once('../ConexaoPHP/produto_pesquisa.php') ?>
<style>
    .textarea1
    {
        resize: none!important;
    }
</style>
<body>
    <form action="" method="post" id="frmproduto" style="background-color: darkgray;" enctype="multipart/form-data">
        <div class="row mt-3 ">
            <div class="col-sm-6">Nome do Produto
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome"
                    value="<?= $nomeProduto ?>">
            </div>
            <div class="col-sm-3">Data de cadastro
                <input type="date" class="form-control" style="border-radius: 25px;" name="txtCadastro"
                    id="txtCadastro" readonly value="<?= substr($datacadastroProduto, 0, 10) ?>">
            </div>
            <div class="col-sm-2"> ID do Produto
                <input type="number" class="form-control" style="border-radius: 25px;" name="txtId" min="0"
                    value="<?= $idProduto ?>">
            </div>
            <div class="col-sm-1 text-center mt-4">
                <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa"
                    formaction="sistema.php?tela=produto">&#128269;</button>
            </div>

        </div>
            <hr>
        <div class="row">
            <div class="col-sm-4 mt-3">
                <img src="../../img/prod/<?=$idProduto?>/<?=$imgProduto?>" class="w-50 " alt="">
            </div>
            <div class="col-sm-8">
                <div class="row mt-3">
                    <div class="col-sm-4">Categoria
                        <select name="text" id="tex" class="form-control" style="border-radius: 25px;">
                            <option value="">--Selecione uma Categoria --</option>
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>
                    </div>
                    <div class="col-sm-4">Marca
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtMarca"
                            id="txtMarca" value="<?= $marcaProduto ?>">
                    </div>
                    <div class="col-sm-4">Quantidade
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtQtde"
                            id="txtQtde" value="<?= $qtdeProduto ?>">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-4">Valor unitario
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtValorunitario"
                            id="txtValorunitario" value="<?= $valorunitario_produto ?>">
                    </div>
                    <div class="col-sm-4">Valor custo
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtValorcusto"
                            id="txtValorcusto" value="<?= $valorcusto_produto ?>">
                    </div>
                    <div class="col-sm-4">Desconto
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtDesconto"
                            id="txtDesconto" value="<?= $descontoProduto ?>">
                    </div>
                    <div class="col-sm-4">Percentual de lucro %
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtPercentualdelucro" id="txtPercentualdelucro">
                    </div>
                    <div class="col-sm-4">Lote
                         <input type="text" class="form-control" style="border-radius: 25px;" name="txtLote" id="txtLote"
                             value="<?= $loteProduto ?>">
                     </div>
                     <div class="col-sm-4">Escala
                         <input type="text" class="form-control" style="border-radius: 25px;" name="txtEscala"
                            id="txtEscala" value="<?= $escalaProduto ?>">
                     </div>
                     <div class="col-sm-4">Peso (kg)
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtPeso" id="txtPeso"
                            value="<?= $pesoProduto ?>">
                        </div>
                     <div class="col-sm-4">Status
                        <select name="txtStatus" class="form-control" style="border-radius: 25px;">
                            <option value="">--Selecione um Status--</option>
                            <option value="ativo" <?= ($statusProduto == 'ativo' ? 'selected' : "") ?>>ativo</option>
                            <option value="inativo" <?= ($statusProduto == 'inativo' ? 'selected' : "") ?>>inativo</option>
                        </select>
                    </div>
                     <div class="col-sm-4">Dimensão (Altura cm / Largura cm)
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtDimensao" id="txtDimensao"
                            value="<?= $dimensaoProduto ?>">
                    </div>
                </div>
            </div>  
        </div>
        <div class="row">
            <div class="col-sm-4">
                <input type="file" class="btn btn-primary btn-sm" class="auto" name="txtImg" id="txtImg">
            </div>
        </div>
    <hr>
        <div class="row mt-3">
           
        </div>

        <div class="row mt-3">
            
            <div class="col-sm-4">Nome categoria
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtCategoria"
                    id="txtCategoria" readonly value="<?= $nomecategoriaProduto ?>">
            </div>
            <div class="col-sm-4"> ID da categoria
                <input type="number" class="form-control" style="border-radius: 25px;" name="txtIdcategoria" min="0"
                    value="<?= $idcategoriaProduto ?>">
            </div>
            <div class="col-sm-4"> Observação
                <textarea class="form-control textarea1" name="txtObs" id="txtObs" rows="1" style="border-radius: 25px;" value="<?= $obsProduto?>"></textarea>
            </div>

        </div>

        <div class="row mt-3">
            <div class="col-sm-12 text-end">
                <button class="btn btn-danger btn-lg"
                    formaction="../ConexaoPHP/produto_excluir.php">Excluir</button>
                <a href="sistema.php?tela=produto" class="btn btn-primary btn-lg" name="btoLimpar" id="btoLimpar"
                    class="btn btn-secundary">Limpar</a>
                <button class="btn btn-warning btn-lg" formaction="../ConexaoPHP/produto_alterar.php">Alterar</button>
                    <button name="btoCadastrar" class="btn btn-success btn-lg" formaction="../ConexaoPHP/produto_cadastrar.php">Cadastrar</button>
            </div>
        </div>
    </form>
</body>

<script>

    let formulario = document.getElementById("frmproduto");
    let id =document.getElementById("txtId");
    let idcategoria =document.getElementById("txtIdcategoria");
    let nome =document.getElementById("txtNome");
    let marca =document.getElementById("txtMarca");
    let lote =document.getElementById("txtLote");
    let qtde =document.getElementById("txtQtde");
    let peso =document.getElementById("txtPeso");
    let dimensao =document.getElementById("txtDimensao");
    let escala =document.getElementById("txtEscala");
    let valorunitario =document.getElementById("txtValorunitario");
    let valorcusto =document.getElementById("txtValorcusto");
    // let desconto =document.getElementById("txtDesconto");
    // let img =document.getElementById("txtImg");
    // let obs =document.getElementById("txtObs");
    let Status =document.getElementById("txtStatus");

    function Pesquisar()
    {
        if(id.value.trim()=="")
        {
            alert("Erro, o codigo deve ser preenchido");
            id.focus();
            return;
        }

        formulario.action = "sistema.php?tela=produto";
        formulario.submit();
    }

    function Cadastrar()
    {
        if(idcategoria.value.trim()=="")
        {
            alert("Erro, a categoria deve ser informada");
            idcategoria.focus();
            return;
        }

        if(nome.value.trim()=="")
        {
            alert("Erro, o NOME deve ser informado");
            nome.focus();
            return;
        }

        if(marca.value.trim()=="")
        {
            alert("Erro, a MARCA deve ser informado");
            marca.focus();
            return;
        }

        if(lote.value.trim()=="")
        {
            alert("Erro, o LOTE deve ser informado");
            lote.focus();
            return;
        }

        if(qtde.value.trim()=="")
        {
            alert("Erro, a QUANTIDADE deve ser informado");
            qtde.focus();
            return;
        }

        if(peso.value.trim()=="")
        {
            alert("Erro, o PESO deve ser informado");
            peso.focus();
            return;
        }

        if(dimensao.value.trim()=="")
        {
            alert("Erro,  deve ser informado");
            nome.focus();
            return;
        }


    }


</script>
