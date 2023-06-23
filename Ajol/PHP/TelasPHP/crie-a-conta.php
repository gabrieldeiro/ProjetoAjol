<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crie a conta</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../js/bootstrap.bundle.js">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  <?php
  include_once('../ConexaoPHP/conexao.php');
  ?>
</head>
<body>
    <div class="container border border-secondary mt-4" style="border-radius: 25px;">
        <div class="row text-center">
            <h2 class="p-2 mt-2">Crie a sua conta</h2>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome completo">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="txtCPF" name="txtCPF" placeholder="CPF">
                </div>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome completo">
                </div>  
            </div>
        </div>
    </div>
</body>
</html>