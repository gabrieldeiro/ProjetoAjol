<?php 
    include_once('conexao.php');
    
    if($_POST)
    {

        $id = $_POST['txtIdtemp'];
        $img = $_FILES['txtImg']['name'];
        $status = 'Ativo';

        try 
        {
            if (isset($_FILES['txtImg']))
            {
                $img = $_FILES['txtImg'];
            }
            else
            {
                $img='';
            }
            
          
            $sql = $conn->prepare("
            update usuario set
                status_usuario=:status_usuario,
                img_usuario=:img_usuario
                where id_usuario=:id_usuario
            ");
            
            $sql->execute(array(
                ':status_usuario'=>$status,
                ':id_usuario'=>$id,
                ':img_usuario'=>$img['name']
                
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<a href="../TelasPHP/index.php">Faça seu novo login!</a>';

                $pasta = '../../img/usu/'.$id.'/';

                if(!file_exists($pasta))
                {
                    mkdir($pasta);
                }

                $foto = $pasta.$img['name'];

                move_uploaded_file($img['tmp_name'],$foto);
            }


        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:"../TelasPHP/loja.php"');
    }
    
    
?>

<a href=""></a>
    
 
    