    <form action="" method="post" style="background-color: darkgray;">
        <div class="row mt-3 ">
            <div class="col-sm-6">Nome do Produto
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
            </div>
            <div class="col-sm-3 mt-4">
                <input type="date" class="form-control" style="border-radius: 25px;" name="txtCadastro" id="txtCadastro" hidden>
            </div>
            <div class="col-sm-2"> ID do Produto
                <input type="number" class="form-control" style="border-radius: 25px;" name="txtID" min="0">
            </div>
            <div class="col-sm-1 text-center mt-4">
                <button class="btn btn-primary" style="border-radius: 25px;" name="btoPesquisa" id="btoPesquisa" formaction="_sistema.php?tela=produto">&#128269;</button>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-4 mt-4 card">
                Imagem produto
            </div>
            <div class="col-sm-8">
                <div class="row mt-3">
                    <div class="col-sm-4">Categoria
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
                    </div>
                    <div class="col-sm-4">Marca
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
                    </div>
                    <div class="col-sm-4">Quantidade
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
                    </div>
                </div>
                <div class="row mt-3 ">
                    <div class="col-sm-4">Valor unitario
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
                    </div>
                    <div class="col-sm-4">Valor custo
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
                    </div>
                    <div class="col-sm-4">Percentual de lucro %
                        <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col-sm-4">
                <input type="file" class="btn btn-primary btn-lg btn-block" name="image[]" multiple="multiple"></label>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3">Altura (cm)
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
            </div>
            <div class="col-sm-3">Largura (cm)
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
            </div>
            <div class="col-sm-3">Comprimento (cm)
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
            </div>
            <div class="col-sm-3">Peso (kg)
                <input type="text" class="form-control" style="border-radius: 25px;" name="txtNome" id="txtNome">
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-sm-12 text-end">
                <button type="button" class="btn btn-danger btn-lg">Excluir</button>
                <button type="button" class="btn btn-warning btn-lg">Alterar</button>
                <button type="button" class="btn btn-success btn-lg">Cadastrar</button>
                <button type="button" class="btn btn-primary btn-lg">Limpar</button>
            </div>
        </div>
    </form>