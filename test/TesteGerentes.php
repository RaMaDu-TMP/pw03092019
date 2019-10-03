<?php
	require_once '../controller/GerenteController.php';
	require_once '../models/Gerente.php';
	
	echo '<h1>Todos os gerentes</h1>';
	$allManager = GerenteController::getAll();
	foreach($allManager as $g) {
		$manager = Gerente::fromPDO($g);
		$manager->printInfo();
	}

	$cod = 1;
    echo '<h1>Gerente com código '.$cod.':</h1>';
    $managerByProd = GerenteController::getByCod($cod);
    if (!is_null($managerByProd)) {
        $manager = Gerente::fromPDO($managerByProd);
        $manager->printInfo();
    } else {
        echo 'Não encontrado';
	}
	
	$cod = 10;
    echo '<h1>Gerente com código '.$cod.':</h1>';
    $managerByProd = GerenteController::getByCod($cod);
    if (!is_null($managerByProd)) {
        $manager = Gerente::fromPDO($managerByProd);
        $manager->printInfo();
    } else {
        echo 'Não encontrado';
    }
?>