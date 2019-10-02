<?php

    require_once 'ProdutoController.php';
    require_once 'Produto.php';

    if(isset($_POST['nomeProd'])){
        $produto = new Produto();

		$produto->setNomeProd($_POST['nomeProd']);
		$produto->setDescricaoProd($_POST['descricaoProd']);
        $produto->setPrecoProd($_POST['precoProd']);
        $produto->setQtdProd($_POST['qtdProd']);

        if($produto->inserir()){
            ?>
            <script>
                window.alert("Produto inserido com sucesso");
                window.location.href="../gerente/menu_produtos-Gerente.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                window.alert("Erro ao inserir o produto");
                window.location.href="../gerente/menu_produtos-Gerente.php";
            </script>
            <?php
        }
    }
?>