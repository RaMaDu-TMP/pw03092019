<?php
	require_once '../controller/FuncionarioController.php';
	require_once '../models/Funcionario.php';
    
    echo '<h1>Todos os funcionários</h1>';
    $allFuncionarios = FuncionarioController::getAll();
    if (is_null($allFuncionarios) || empty($allFuncionarios)) {
        echo 'Não encontrado';
    } else {
        foreach($allFuncionarios as $f) {
            $employee = Funcionario::fromPDO($f);
            $employee->printInfo();
        }
    }
    
    $cod = 3;
    echo '<h1>Funcionário com código '.$cod.':</h1>';
    $funcByCod = FuncionarioController::getByCod($cod);
    if (!is_null($funcByCod)) {
        $employee = Funcionario::fromPDO($funcByCod);
        $employee->printInfo();
    } else {
        echo 'Não encontrado';
    }

    $cod = 30;
    echo '<h1>Funcionário com código '.$cod.':</h1>';
    $funcByCod = FuncionarioController::getByCod($cod);
    if (!is_null($funcByCod)) {
        $employee = Funcionario::fromPDO($funcByCod);
        $employee->printInfo();
    } else {
        echo 'Não encontrado';
    }

    // Inserction test
    $newFuncionario = new Funcionario();
    $newFuncionario->setCodFunc(4);
    $newFuncionario->setNomeFunc('Eduwardo');
    $newFuncionario->setEmailFunc('dudu@batata.com');
    $newFuncionario->setSenhaFunc('Abcd1234');
    $newFuncionario->setDataNascFunc('2000-10-12 00:00:00');

    echo '<h1>Adicionando funcionário com nome '.$newFuncionario->getNomeFunc().'</h1>';
    FuncionarioController::insert($newFuncionario);

    // Update test
    $newFuncionarioNome = "Robson";
    echo '<h1>Atualizando funcionario com nome '.$newFuncionario->getNomeFunc().' para o nome '.$newFuncionarioNome.'</h1>';
    $newFuncionario->setNomeFunc($newFuncionarioNome);
    FuncionarioController::update($newFuncionario);

    // Delete test
    echo '<h1>Deletando funcionario com nome '.$newFuncionario->getNomeFunc().'</h1>';
    FuncionarioController::delete($newFuncionario);
?>