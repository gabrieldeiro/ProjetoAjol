<?php
    include_once('conexao.php');

    if($_POST)
    {
        $idcategoria = $_POST['txtIdcategoria'];
        $nome = $_POST['txtNome'];
        $marca = $_POST['txtMatca'];
        $datacadastro = $_POST['txtData'];
        $lote = $_POST['txtLote'];
        $qtde = $_POST['txtQtde'];
        $peso = $_POST['txtPeso'];
        $escala = $_POST['txtEscala'];
        $valor = $_POST['txtValor'];
        $desconto = $_POST['txtDesconto'];
        $img = '';
        $img2 = '';
        $img3 = '';
        $obs = $_POST['txtObs'];
        $status = $_POST['txtStatus'];

        try 
        {
            if(isset($_FILES['txtImg']))
            {
                $img = $_FILES['txtImg'];

            }
            else
            {
                echo 'Erro, a imagem deve ser enviada';
                return;
            }

            $sql = $conn->prepare("
                insert into produto
                (
                    id_categoria_produto,
                    nome_produto,
                    marca_produto,
                    datacadastro_produto,
                    lote_produto,
                    qtde_produto,
                    peso_produto,
                    escala_produto,
                    valor_produto,
                    desconto_produto,
                    img_produto,
                    img2_produto,
                    img3_produto,
                    obs_produto,
                    status_produto
                )
                value
                (
                    :id_categoria_produto,
                    :nome_produto,
                    :marca_produto,
                    :datacadastro_produto,
                    :lote_produto,
                    :qtde_produto,
                    :peso_produto,
                    :escala_produto,
                    :valor_produto,
                    :desconto_produto,
                    :img_produto,
                    :img2_produto,
                    :img3_produto,
                    :obs_produto,
                    :status_produto
                )
            
            ");

            $sql->execute(array(
                ':id_categoria_produto'=>$idcategoria,
                ':nome_produto'=>$nome,
                ':marca_produto'=>$marca,
                ':datacadastro_produto'=>$datacadastro,
                ':lote_produto'=>$lote,
                ':qtde_produto'=>$qtde,
                ':peso_produto'=>$peso,
                ':escala_produto'=>$escala,
                ':valor_produto'=>$valor,
                ':desconto_produto'=>$desconto,
                ':img_produto'=>$img,
                ':img2_produto'=>$img2['name'],
                ':img3_produto'=>$img3['name'],
                ':obs_produto'=>$obs,
                ':status_produto'=>$status
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: '. $conn->lastInsertId().'</p>';

                $pasta = '../Ajol/img/prod'.$conn->lastInsertId().'/';

                if(!file_exists($pasta))
                {
                    mkdir($pasta);
                }

                $foto = $pasta.$img['name'];
                $foto2 = $pasta.$img2['name'];
                $foto3 = $pasta.$img3['name'];

                move_uploaded_file($img['tmp_name'],$foto);
                move_uploaded_file($img2['tmp_name'],$foto2);
                move_uploaded_file($img3['tmp_name'],$foto3);
                
            }



        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:../TelasPHP/frm_produto.php');
    }

?>

<a href="../TelasPHP/frm_produto.ph">Voltar</a>
