<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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

<body style="background-color: grey!important;">
  <?php
  include_once('topo2.php');

  $mensagemadm = '';
  
  if ($_POST) {
    include_once('../ConexaoPHP/conexao.php');
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    

    try {
      $sql = $conn->query('select * from funcionario where login_funcionario = "' . $login . '" and senha_funcionario = "' . $senha . '"');
      if ($sql->rowcount() == 1) {
        session_start();

        foreach ($sql as $row) {
          $idfuncionario = $row[0];
          $_SESSION['id_funcionario'] = $row[0];
          $_SESSION['login_funcionario'] = $row[1];
          $_SESSION['senha_usuario'] = $row[4];

          header('Location:sistema.php'); 
        }
      } else {
        $mensagemadm = 'Erro, login ou senha inválido';
      }
    } catch (PDOException $ex) {
      $ex->getMessage();
    }
  }
  ?>

  <div class="container text-center mt-5">

    <div class="row">
      <div class="col-md-6 offset-md-3">


        <div class="card my-5" style="border-radius: 30px;">

          <form class="centro" class="card-body cardbody-color p-lg-5" action="" method="post">

            <div class="text-center">
              <img src="../../../resto/Logo-prototipo.png" class="img-fluid p-3 my-3" width="200px" alt="profile">
            </div>

            <div class="col-sm-12 mb-3">
              <input type="text" class="form-control" id="txtlogin" name="txtlogin" placeholder="Login">
            </div>
            <div class="col-sm-12 mb-3">
              <input type="password" class="form-control" id="txtsenha" name="txtsenha" placeholder="Senha">

            </div>
              <p><?=$mensagemadm?></p>
            <div class="text-center">
              
              <button class="btn btn-info btn-md" value="Entrar" formaction="indexadm.php">Login</button>
              <!-- botao de entrar na tela loja index -->

              <div class="form-text text-center mb-2 text-dark">Primeiro Acesso
                <button class="mt-4">
                  <!-- USUÁRIO VAI CRIAR SUA PRÓPRIA CONTA -->
                  <a href="../TelasPHP/crie-a-conta.php" class="text-dark fw-bold"> Crie a sua conta</a>
                </button>
              </div>

              <div>
                <!--
                  USUÁRIO VAI RESETAR A SENHA 
                -->
                <button type="button" class="btn btn-danger mt-2 mb-3">
                  <a style="color:white" href="esqueceusenha.php">Esqueceu a senha?</button>
                </a>
              </div>
          </form>
        </div>

      </div>
    </div>
  </div>

</body>

</html>