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
  <link rel="shortcut icon" href="../../../resto/icone.png" type="image/x-icon">

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
        <div class="row text-center mt-2">
          <h1>Histórico de compras</h1>
        </div>
        <?php

        //Pesquisa de compra aonde condiz com o id do usuário e o status compra for finalizado
        $sql = $conn->query('select * from compra where id_usuario_compra= ' . $idusuariologin . ' and status_compra = "FINALIZADO"');

        //Caso ele encontre
        if ($sql->rowCount() >= 1) 
        {
          try {

            //Para cada coluna encontrada
            foreach ($sql as $row) 
            {
              //Ele vai pesquisar o item produto aonde o id de compra for condizente com o encontrado
              $sql2 = $conn->query('select * from itemproduto where id_compra_itemproduto='.$row[0]);
              {
                foreach ($sql2 as $row2) 
                {
                  //Como evitar mais um foreach?
                  //Para cada item produto encontrado
                  $sqlProduto = $conn->query('select * from produto where id_produto='.$row2[1]);

                  foreach ($sqlProduto as $rowProduto) 
                  {}
                }
              }
              //AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
              $multi = 0;
              if ($row[2] < 1000 ) 
              {
                $multi = $row[2] * 1000;
              }
              else {
                $multi = $row[2];
              }
              echo "
                <div class='row card-body p-3'>
                  <div class='col-sm-12 border border-1 p-4' style='border-radius:20px'>
                      <div class='col-sm-2'>
                        <img src='../../img/prod/$rowProduto[0]/$rowProduto[13]' class='img-fluid w-100' alt=''>
                      </div>

                      <div class='col-sm-4'>

                      </div>
                      <div class='col-sm-4 mt-4'>
                        <h4 class='p-2'>
                          Quantidade de Itens: <span class='text-success'>$row[3]</span>
                        </h4>
                        <h4 class='p-2'>
                          Valor de Desconto: <span class='text-danger'>R$".number_format($row[7],2,',','.')."</span>
                        </h4>
                        <h4 class='p-2'>
                          Valor Total: <span class='text-success'>R$".number_format($multi,2,',','.')."</span>
                        </h4>
                      </div>
                      <div class='col-sm-2 mt-5'>
                        <h5>
                          Data de Fechamento da compra:<br><br> $row[4]
                        </h5>
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
  <!--ampliei a gambiarra. ~gabriel -->
  <div class="col-sm-12" style="background-color: #404040;">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</body>

</html>