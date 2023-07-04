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
                header('Location:../TelasPHP/crie-a-conta-2.php?id='.$conn->lastInsertId());
                // echo '<a href="../TelasPHP/crie-a-conta-2.php?id='.$conn->lastInsertId().'">proximo</a>';
            }
            

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:../TelasPHP/sistema.php?tela=usuario'); 
    }

?>

<a href="../TelasPHP/sistema.php?tela=usuario">Voltar</a>
