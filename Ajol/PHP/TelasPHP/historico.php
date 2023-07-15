<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Histórico de compras
  </title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../js/bootstrap.bundle.js">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <?php
  include_once('../ConexaoPHP/conexao.php');
  include_once('../ConexaoPHP/loginautenticar.php');
  include_once('topoDefinitivo.php');
  ?>

  <div class="container-fluid" style="background-color: #404040;">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8 bg-white mt-5" style="border-radius: 20px;">
      <div class="col-sm-12">
        <?php

        $sql = $conn->query('select * from compra where id_usuario_compra= ' . $idusuariologin . ' and status_compra = "FINALIZADO"');

        if ($sql->rowCount() >= 1) 
        {
          try {

            foreach ($sql as $row) {

              echo "
                <div class='row card-body p-3'>
                  <div class='col-sm-12 border border-1'>
                      <div class='col-sm-1'>
                        <h3>$row[0]</h3>
                      </div>
                      <div class='col-sm-1'>

                      </div>
                      <div class='col-sm-4'>

                      </div>
                      <div class='col-sm-4'>
                        <p>
                          Quantidade de Itens: <span class='text-success'>$row[3]</span>
                        </p>
                        <p>
                          Valor de Desconto: <span class='text-danger'>$row[2]</span>
                        </p>
                        <p>
                          Valor Total: <span class='text-success'>$row[2]</span>
                        </p>
                        
                      </div>
                      <div class='col-sm-2'>
                        <p>
                        
                        </p>
                      </div>
                  </div>
                </div>
                ";
            }
          } catch (PDOException $erro) {
            echo $erro->getMessage();
          }
        }
        else {
          echo 
          "
            <div class='row'>
              <div class='col-sm-12 text-center mt-3 mb-3'>
                <h2>Você ainda não fez um pedido</h2>
                <br>
                <h2>
                  <a href='loja.php' style='text-decoration:none'>Clique aqui para fazer o seu primeiro pedido</a>
                <h2>
              </div>
            </div>
          ";
        }
        ?>
      </div>
    </div>
    <div class="col-sm-2">

    </div>
  </div>
  <div class="col-sm-12" style="background-color: #404040;">
    <br>
    <br>
    <br>
    <br>
  </div>
</body>

</html>