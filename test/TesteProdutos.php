<?php
	require_once '../controller/ProdutoController.php';
	require_once '../models/Produto.php';
	
	echo '<h1>Todos os produtos</h1>';
    $allProducts = ProdutoController::getAll();
    if (is_null($allProducts) || empty($allProducts)) {
        echo 'Não encontrado';
    } else {
        foreach($allProducts as $p) {
            $product = Produto::fromPDO($p);
            $product->printInfo();
        }
    }

	$cod = 1;
    echo '<h1>Produto com código '.$cod.':</h1>';
    $prodByCod = ProdutoController::getByCod($cod);
    if (!is_null($prodByCod)) {
        $employee = Produto::fromPDO($prodByCod);
        $employee->printInfo();
    } else {
        echo 'Não encontrado';
	}
	
	$cod = 10;
    echo '<h1>Produto com código '.$cod.':</h1>';
    $prodByCod = ProdutoController::getByCod($cod);
    if (!is_null($prodByCod)) {
        $employee = Produto::fromPDO($prodByCod);
        $employee->printInfo();
    } else {
        echo 'Não encontrado';
    }
?>