<?php
	require_once 'Produto.php';
	
	if(isset($_POST['codProd'])){
		$produto = new Produto();
		$produto->setNomeProd($_POST['nomeProd']);
		$produto->setDescricaoProd($_POST['descricaoProd']);
        $produto->setPrecoProd($_POST['precoProd']);
        $produto->setQtdProd($_POST['qtdProd']);
		if($produto->alterar()){
			?>
			<script>
			window.alert("Produto alterado com sucesso");
            window.location.href="../gerente/menu_produtos-Gerente.php";
			</script>
			<?php
		}else{
			?>
			<script>
			window.alert("Erro ao alterar o produto!");
            window.location.href="../gerente/menu_produtos-Gerente.php";
			</script>
			<?php
		}
	}
?>