<?php
	require_once '../controller/GerenteController.php';
	require_once '../models/Gerente.php';
	
	echo '<h1>Todos os gerentes</h1>';
    $allManager = GerenteController::getAll();
    if (is_null($allManager) || empty($allManager)) {
        echo 'Não encontrado';
    } else {
        foreach($allManager as $g) {
            $manager = Gerente::fromPDO($g);
            $manager->printInfo();
        }
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

    // Inserction test
    $newGerente = new Gerente();
    $newGerente->setCodGer(5);
    $newGerente->setNomeGer('Eduwardo');
    $newGerente->setEmailGer('dudu@batata.com');
    $newGerente->setSenhaGer('Abcd1234');
    $newGerente->setDataNascGer('2000-10-12 00:00:00');

    echo '<h1>Adicionando gerente com nome '.$newGerente->getNomeGer().'</h1>';
    GerenteController::insert($newGerente);

    // Update test
    $newGerenteNome = "Robson";
    echo '<h1>Atualizando gerente com nome '.$newGerente->getNomeGer().' para o nome '.$newGerenteNome.'</h1>';
    $newGerente->setNomeGer($newGerenteNome);
    GerenteController::update($newGerente);

    // Delete test
    echo '<h1>Deletando gerente com nome '.$newGerente->getNomeGer().'</h1>';
    GerenteController::delete($newGerente);
?>