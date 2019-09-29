<?php
	require_once '../controller/ProdutoController.php';
	require_once '../models/Produto.php';
	
	$allProducts = ProdutoController::getAll();
	foreach($allProducts as $p) {
		$product = Produto::fromPDO($p);
		$product->printInfo();
	}
?>