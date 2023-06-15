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




<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
      <div class="eula">By logging in you agree to the ridiculously long terms that you didn't bother to read</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
        <label for="email">Email</label>
        <input type="email" id="email">
        <label for="password">Password</label>
        <input type="password" id="password">
        <input type="submit" id="submit" value="Submit">
    
        

    </div>
    </div>
  </div>
</div>




<script src="login.js"></script>

</body>

</html> 
 
 <!-- <form method="post" name="login" id="login">
        <section class="vh-100" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <h3 class="mb-5">Entrar</h3>

                                <div class="form-outline mb-4">
                                    <input type="text" id="txtlogin" name="txtlogin" class="form-control form-control-lg" />
                                    <label class="form-label" for="txtlogin">Usuário</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="txtsenha" name="txtsenha" class="form-control form-control-lg" />
                                    <label class="form-label" for="txtsenha">senha</label>
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" formaction="login.php">Login</button>
                                <hr class="my-4">
                                <p><?=$mensagem?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form> -->
