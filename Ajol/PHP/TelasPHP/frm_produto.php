<?php include_once('../ConexaoPHP/funcionario_pesquisa.php') ?>

<body>
        <form action="" method="post" style="background-color: darkgray;">
            <div class="row mt-3 ">
                <div class="col-sm-6">Nome do Produto
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome"
                        value="<? $nome ?>">
                </div>
                <div class="col-sm-3 mt-4">
                    <input type="date" class="form-control" style="border-radius: 25px;" name="txtCadastro"
                        id="txtCadastro" hidden>
                </div>
                <div class="col-sm-2"> ID do Produto
                    <input type="number" class="form-control" style="border-radius: 25px;" name="txtID" min="0">
                </div>
                <div class="col-sm-1 text-center mt-4">
                    <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa"
                        formaction="../ConexaoPHP/produto_pesquisa.php">&#128269;</button>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-4 mt-4 card">
                    Imagem produto
                </div>
                <div class="col-sm-8">
                    <div class="row mt-3">
                        <div class="col-sm-4">Categoria
                            <select name="txtStatus" id="textStatus" class="form-control" style="border-radius: 25px;">
                                <option value="">--Selecione uma Categoria --</option>
                                <option value="ativo">Ativo</option>
                                <option value="inativo">Inativo</option>
                            </select>
                        </div>
                        <div class="col-sm-4">Marca
                            <input type="text" class="form-control" style="border-radius: 25px;" name="txtMarca"
                                id="txtMarca">
                        </div>
                        <div class="col-sm-4">Quantidade
                            <input type="text" class="form-control" style="border-radius: 25px;" name="txtQuantidade"
                                id="txtQuantidade">
                        </div>
                    </div>
                    <div class="row mt-3 ">
                        <div class="col-sm-4">Valor unitario
                            <input type="text" class="form-control" style="border-radius: 25px;" name="txtValorunitario"
                                id="txtValorunitario">
                        </div>
                        <div class="col-sm-4">Valor custo
                            <input type="text" class="form-control" style="border-radius: 25px;" name="txtValorcusto"
                                id="txtValorcusto">
                        </div>
                        <div class="col-sm-4">Percentual de lucro %
                            <input type="text" class="form-control" style="border-radius: 25px;"
                                name="txtPercentualdelucro" id="txtPercentualdelucro">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col-sm-4">
                    <input type="file" class="btn btn-primary btn-lg btn-block" name="image[]"
                        multiple="multiple"></label>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-3">Altura (cm)
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtAltura"
                        id="txtAltura">
                </div>
                <div class="col-sm-3">Largura (cm)
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtlargura"
                        id="txtlargura">
                </div>
                <div class="col-sm-3">Comprimento (cm)
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtComprimento"
                        id="txtComprimento">
                </div>
                <div class="col-sm-3">Peso (kg)
                    <input type="text" class="form-control" style="border-radius: 25px;" name="txtpeso" id="txtpeso">
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button type="button" class="btn btn-danger btn-lg">Excluir</button>
                    <button type="button" class="btn btn-primary btn-lg">Limpar</button>
                    <button type="button" class="btn btn-warning btn-lg">Alterar</button>
                    <button type="button" class="btn btn-success btn-lg">Cadastrar</button>
                </div>
            </div>


        </form>