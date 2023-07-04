<?php 
// print_r($_POST);
// return;

    include_once('conexao.php');
    
    if($_POST)
    {
        
        $nome = $_POST['txtNome'];
        $login = $_POST['txtLogin'];
        $senha = $_POST['txtSenha'];
       
        $email = $_POST['txtEmail'];


        try 
        {
            $sql = $conn->prepare("
                insert into usuario
                (
	                nome_usuario,
                   
                    login_usuario,
                    senha_usuario,
                    email_usuario
                )
                values
                (
                    :nome_usuario,
                   
                    :login_usuario,
                    :senha_usuario,
                    :email_usuario
                )
            ");
            
            $sql->execute(array(
                ':nome_usuario'=>$nome,
                
                ':login_usuario'=>$login,
                ':senha_usuario'=>$senha,
                ':email_usuario'=>$email
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<a href="../TelasPHP/index.php">Faça login com seu novo usuário!</a>';
            }
            

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:../TelasPHP/loja.php'); 
    }

?>

<a href="../TelasPHP/loja.php">Voltar</a>
