<?php

    require_once 'GerenteController.php';
    require_once 'Gerente.php';

    if(isset($_POST['nomeGeren'])){
        $gerente = new Gerente();

		$gerente->setNomeGeren($_POST['nomeGeren']);
		$gerente->setEmailGeren($_POST['emailGeren']);
        $gerente->setSenhaGeren($_POST['senhaGeren']);
        $gerente->setDataNascimentoGeren($_POST['dataNascimentoGeren']);
        $gerente->inserir($gerente);

        if($student->inserir()){
            ?>
            <script>
                window.alert("Gerente inserido com sucesso");
                window.location.href="../gerente/menu_gerente-Gerente.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                window.alert("Erro ao inserir o gerente");
                window.location.href="../gerente/menu_gerente-Gerente.php";
            </script>
            <?php
        }
    }
?>