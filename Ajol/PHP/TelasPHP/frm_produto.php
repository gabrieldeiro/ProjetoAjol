<?php include_once('../ConexaoPHP/produto_pesquisa.php') ?>

<body>
    <form action="" method="post" style="background-color: darkgray;" enctype="multipart/form-data">
        <div class="row mt-3 ">
            <div class="col-sm-6">Nome do Produto
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome"
                    value="<?= $nomeProduto ?>">
            </div>
            <div class="col-sm-3 mt-4">
                <input type="date" class="form-control" style="border-radius: 25px;" name="txtData"
                    id="txtCadastro">
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

        <div class="row">
            <div class="col-sm-4 mt-3">
                <img src="../../img/pro/<?=$idProduto?>/<?=$imgProduto?>" class="w-50 " alt="">
            </div>
            <div class="col-sm-8">
                <div class="row mt-3">
                    <div class="col-sm-4">Categoria
                        <select name="tex" id="tex" class="form-control" style="border-radius: 25px;">
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
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtQuantidade"
                            id="txtQuantidade" value="<?= $marcaProduto ?>">
                    </div>
                </div>
                <div class="row mt-3 ">
                    <div class="col-sm-4">Valor unitario
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtValor"
                            id="txtValor" value="<?= $valorProduto ?>">
                    </div>
                    <div class="col-sm-4">desconto
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtDesconto"
                            id="txtDesconto" value="<?= $descontoProduto ?>">
                    </div>
                    <div class="col-sm-4">Percentual de lucro %
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtPercentualdelucro"
                            id="txtPercentualdelucro">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col-sm-4">
                <input type="file" class="btn btn-primary btn-lg btn-block" name="txtImg">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3">Lote
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtLote" id="txtLote"
                    value="<?= $loteProduto ?>">
            </div>
            <div class="col-sm-3">Quantidade
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtQtde" id="txtQtde"
                    value="<?= $qtdeProduto ?>">
            </div>
            <div class="col-sm-3">Escala
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtEscala"
                    id="txtEscala" value="<?= $escalaProduto ?>">
            </div>
            <div class="col-sm-3">Peso (kg)
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtPeso" id="txtPeso"
                    value="<?= $pesoProduto ?>">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-4">Status
                <select name="txtStatus" class="form-control" style="border-radius: 25px;">
                    <option value="">--Selecione um Status--</option>
                    <option value="ativo" <?= ($statusProduto == 'ativo' ? 'selected' : "") ?>>ativo</option>
                    <option value="inativo" <?= ($statusProduto == 'inativo' ? 'selected' : "") ?>>inativo</option>
                </select>
            </div>
            <div class="col-sm-4"> ID da categoria
                <input type="number" class="form-control" style="border-radius: 25px;" name="txtIdcategoria" min="0"
                    value="<?= $idcategoriaProduto ?>">
            </div>
            <div class="col-sm-4">Nome categoria
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtCategoria"
                    id="txtCategoria" value="<?= $nomecategoriaProduto ?>">
            </div>
            <div class="col-sm-4">
                <textarea class="form-control" name="txtObs" id="txtObs" rows="5" placeholder="Observação " value="<?= $obsProduto?>"></textarea>
            </div>

        </div>

        <div class="row mt-3">
            <div class="col-sm-12 text-end">
                <button type="button" class="btn btn-danger btn-lg"
                    formaction="../ConexaoPHP/produto_excluir.php">Excluir</button>
                <a href="sistema.php?tela=produto" class="btn btn-success btn-lg" name="btoLimpar" id="btoLimpar"
                    class="btn btn-secundary">Limpar</a>
                <button type="button" class="btn btn-warning btn-lg"
                    formaction="../ConexaoPHP/produto_alterar.php">Alterar</button>
                    <button name="btoCadastrar" class="btn btn-success" formaction="../ConexaoPHP/produto_cadastrar.php">Cadastrar</button>
            </div>
        </div>


    </form>
</body>