<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/bootstrap.css">
    <link rel="stylesheet" href="../css/js/bootstrap.js">
    <link rel= "stylesheet" href="login.css">
    
    <title>Document</title>
</head>

<body>
    <?php
    $mensagem = '';
    if ($_POST) {
        include_once('conexaoloja.php');
        $login = $_POST['txtlogin'];
        $senha = $_POST['txtsenha'];

        try {
            $sql = $conn->query('
                        select * from usuario
                        where 
                            login_usuario = "'.$login.'" and
                            senha_usuario = "'.$senha.'"
                    ');
            if ($sql->rowcount() == 1) {
                session_start();

                foreach ($sql as $row) {
                    $_SESSION['id_usuario'] = $row[0];
                    $_SESSION['login_usuario'] = $row[1];
                    $_SESSION['senha_usuario'] = $row[4];
                   

                    header('Location:lojaindex.php');
                }
            } else {
                $mensagem = 'Erro, usuário ou senha inválido';
            }
        } catch (PDOException $ex) {
            $ex->getMessage();
        }

    }
    ?>



<body>

<div class= "container fluid " class="bg-image" 
     style="background-image: url('https://mdbootstrap.com/img/new/standard/city/041.jpg');
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            position:relative;">
</div>




<div class="container text-center "
    style='position:absolute; top:110px; left:6px;'>


    <div class="row">
      <div class="col-md-6 offset-md-3">
        
       
        <div class="card my-5">

          <form class="centro" class="card-body cardbody-color p-lg-5" action="" method="post" >

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="txtlogin" name="txtlogin" placeholder="nome">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="txtsenha" name="txtsenha" placeholder="senha">

            </div>
            <div class="text-center">
          
              <input type="submit" name="submit" class="btn btn-info btn-md" value="entrar">
              <!-- botao de entrar na tela loja index -->
            
            <div  class="form-text text-center mb-5 text-dark">Primeiro Acesso
               <button><a href="https://www.uol.com.br/" class="text-dark fw-bold"> Crie a sua conta</a></button>
            </div>
           
            <div >
            <button type="button" class="btn btn-danger"><a href="esqueceusenha.php" > Esqueceu a senha?</button> </a>
           
            </div>
        
        </form>
        </div>

      </div>
    </div>
  </div>




    </body>
</html>