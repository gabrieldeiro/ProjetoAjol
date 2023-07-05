
<!--Tecnicamente esta tela vai ser linkada por um botão na tela de detalhe de "adicionar ao carrinho", então ela vai pegar as infos do produto com o GET, guardar as infos deles e 
    gerar um item produto com elas, e depois ser direcionada para o html do carrinho com essas info. -->
<?php
    include_once('conexao.php');

    //essas var publica vão ser usadas para serem puxadas na tela do carrinho. (pelo menos algumas delas)
    $idItemcompra = '';
    $CimgProduto = '';
    $CnomeProduto = '';
    $CvalorProduto = '';
    $CidProduto = '';
    $CidcompraProduto = '';
    $CobsProduto = '';
    $CstatusProduto = '';


    if($_POST)
    {

        $CqtdeProduto = $_POST['txtQtde']; //ta puxando da tela de detalhe do produto.

        //pesquisa de info para preencher no formulario do carrinho
        $CidProduto = $_GET['id']; //esse id tem que vir da tela de detalhe, assim que apertar o botão para add no carrinho, ele deve direcionar para esta tela com "id='.$conn->lastInsertId"

        $sql = $conn->query('select * from produto where id_produto='.$CidcompraProduto);

        if($sql->rowCount()>=1)
        {
            foreach($sql as $row)
            {
                $CnomeProduto = $row[2];
                $CvalorProduto = $row[10];
                $CimgProduto = $row[13];
                $CobsProduto=$row[16];
                $CstatusProduto=$row[17];
            }
        }

        //cadastro do item produto
        try
        {
            $sql = $conn->prepare("
                insert into itemproduto
                (
                    id_produto_itemproduto,
                    id_compra_itemproduto,
                    qtde_itemproduto,
                    valortotal_itemproduto,  
                    valorunitario_itemproduto,
                    obs_itemproduto,
                    status_itemproduto
                )
                value
                (
                    :id_produto_itemproduto,
                    :id_compra_itemproduto,
                    :qtde_itemproduto,
                    :valortotal_itemproduto,  
                    :valorunitario_itemproduto,
                    :obs_itemproduto,
                    :status_itemproduto
                )
            ");

            $sql->execute(array(
                ':id_produto_itemproduto'=>$CidcompraProduto,
                ':id_compra_itemproduto'=>$idCompra, //ta vindo do autenticar
                ':qtde_itemproduto'=>$CqtdeProduto, //ta vindo do POST do detalhe
                ':valortotal_itemproduto'=>$CstatusProduto, //valor unitario somado com o frete, de onde/como ele vem?????????
                //o item produto deveria puxar a img do produto tbm(caso sim, iria precisar add no banco)? ou a gente consegue puxar ela individualmente na tela do carrinho já?  
                ':valorunitario_itemproduto'=>$CvalorProduto,
                ':obs_itemproduto'=>$CobsProduto,
                ':status_itemproduto'=>  $CstatusProduto      
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: '. $conn->lastInsertId().'</p>'; //pode tirar isso dps
                $idItemcompra = $conn->lastInsertId(); //esse cara deve ser puxado na tela de detalhe (não sei se é necessario)
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        
    }
    else
    {
        header('Location:../TelasPHP/carrinho.php');//acho que falta alguma coisa nessa parte de redirecionamento... ou não, não tenho certeza.
    }



?>

