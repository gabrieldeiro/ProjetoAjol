<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie a conta</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
    <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <?php
    include_once('../ConexaoPHP/conexao.php');
    ?>
</head>

<body class="bg-secondary">
    <?php
    include_once("topo2.php");
    ?>
    <div class="container" style="border-radius: 25px;">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-md-6 border mt-5 bg-white" style="border-radius: 25px;">
                <form action="" method="post">
                    <input type="text" name="txtIdtemp" hidden id="txtIdtemp" value="<?= $_GET['id'] ?>">
                    <div class="row text-center">
                        <div class="col-sm-3">

                        </div>
                        <div class="col-sm-6">
                            <h2 class="p-2 mt-2 bg-gradient" style="border-radius: 20px; background-color:#d7fb41">Crie
                                a sua conta</h2>
                        </div>
                        <br>
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4 mb-2">
                            <h4 class="border border-1 p-2" style="border-radius: 20px;">Etapa 2 de 3</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-5">
                                <input type="text" class="form-control cpf-mask" name="txtCpf" id="txtCpf" placeholder="CPF: 000.000.000-00">
                            </div>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" name="txtNascimento" id="txtNascimento">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                                <input type="text" class="form-control cep-mask" name="txtCep" id="txtCep" placeholder="CEP: 00000-000">
                            </div>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Endereço" class="form-control" name="txtEndereco"
                                    id="txtEndereco">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="txtBairro" id="txtBairro"
                                    placeholder="Bairro">
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="Cidade" name="txtCidade"
                                    id="txtCidade">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="txtEstado" id="txtEstado"
                                    placeholder="Estado">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" name="txtComplemento" id="txtComplemento" class="form-control"
                                    placeholder="Complemento">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="txtNumero" id="txtNumero"
                                    placeholder="Número">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 p-2">
                        <div class="col-sm-12">
                            <div class="col-sm-6 text-start">
                                <a href="crie-a-conta.php" class="btn btn-danger">
                                    Voltar
                                </a>
                            </div>
                            <div class="col-sm-6 text-end">
                                <button name="btocadastrar" id="btocadastrar" class="btn btn btn-success"
                                    formaction="../ConexaoPHP/crie_contatela2.php">Seguinte</button>


                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>                
        </div>    
    </div>
</body>
</html>

<Script>

        (function(){
    
    const cep = document.querySelector("input[name=txtCep]");
    
    cep.addEventListener('blur', e=> {
          const value = cep.value.replace(/[^0-9]+/, '');
      const url = `https://viacep.com.br/ws/${value}/json/`;
      
      fetch(url)
      .then( response => response.json())
      .then( json => {
              
          if( json.logradouro ) {
              document.querySelector('input[name=txtEndereco]').value = json.logradouro;
            document.querySelector('input[name=txtBairro]').value = json.bairro;
            document.querySelector('input[name=txtCidade]').value = json.localidade;
            document.querySelector('input[name=txtEstado]').value = json.uf;
          }
      
      });
      
      
    });
    
    
    })();
    

</Script>