<?php 
    include_once('conexao.php');
    
    if($_POST)
    {
        $id = $_POST['txtIdtemp'];
        $img = '';


    

        try 
        {
            if (isset($_FILES['txtImg']))
            {
                $img = $_FILES['txtImg'];
            }
            else
            {
                echo 'Erro, a imagem deve ser enviada';
                return;
            }

          
        
            

            $sql = $conn->prepare("
            update usuario set
                
                    img_usuario
                    where id_usuario=:id_usuario

                    
                

            ");
            
            $sql->execute(array(
                ':img_usuario'=>$img['name'],
                ':id_usuario'=>$id

            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: ' .$conn->lastInsertId(). '</p>';

                $pasta = '../../img/usu/'.$conn->lastInsertId().'/';

                if(!file_exists($pasta))
                {
                    mkdir($pasta);
                }

                $foto = $pasta.$img['name'];

                move_uploaded_file($img['tmp_name'],$foto);
            }

            if($sql->rowCount()>=1)
            {
                header('Location:../TelasPHP/loja.php');
                // echo '<a href="../TelasPHP/crie-a-conta-2.php?id='.$conn->lastInsertId().'">proximo</a>';
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
    
 
    