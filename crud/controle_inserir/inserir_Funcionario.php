<?php

    require_once 'FuncionarioController.php';
    require_once 'Funcionario.php';

    if(isset($_POST['nomeFunc'])){
        $funcionario = new Funcionario();

		$funcionario->setNomeFunc($_POST['nomeFunc']);
		$funcionario->setEmailFunc($_POST['emailFunc']);
        $funcionario->setSenhaFunc($_POST['senhaFunc']);
        $funcionario->setDataNascimentoFunc($_POST['dataNascimentoFunc']);
        $funcionario->inserir($funcionario);

        if($student->inserir()){
            ?>
            <script>
                window.alert("Funcionario inserido com sucesso")
                window.location.href="../gerente/menu_funcionario-Gerente.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                window.alert("Erro ao inserir o funcionario")
                window.location.href="../gerente/menu_funcionario-Gerente.php";
            </script>
            <?php
        }
    }
?>