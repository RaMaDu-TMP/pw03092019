<?php
	require_once '../controller/FuncionarioController.php';
	require_once '../models/Funcionario.php';
    
    echo '<h1>Todos os funcionários</h1>';
    $allFuncionarios = FuncionarioController::getAll();
    if (!is_null($allFuncionarios)) {
        foreach($allFuncionarios as $f) {
            $employee = Funcionario::fromPDO($f);
            $employee->printInfo();
        }
    } else {
        echo 'Nenhum funcionário encontrado';
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
?>