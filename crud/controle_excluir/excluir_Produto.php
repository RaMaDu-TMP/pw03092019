<?php

    require_once 'Produto.php';

    if(isset($_GET['codProd'])){
        $produto = new Produto();
        $produto->setID($_GET['codProd']);

        if($produto->apagar()){
            ?>
			<script>
			window.alert("Produto excluido com sucesso")
			window.location.href="../gerente/menu_produtos-Gerente.php";
			</script>
			<?php
        }else{
            ?>
			<script>
			window.alert("Erro ao excluir o produto")
			window.location.href="../gerente/menu_produtos-Gerente.php";
			</script>
			<?php
        }
    }
?>