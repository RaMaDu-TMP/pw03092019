<?php

    require_once 'Funcionario.php';

    if(isset($_POST['codFunc'])){
        $funcionario = new Funcionario();
        $funcionario->setID($_POST['codFunc']);

        if($funcionario->apagar()){
            ?>
			<script>
			window.alert("Funcionario excluido com sucesso")
			window.location.href="menu_produtos-Funcionario";
			</script>
			<?php
        }else{
            ?>
			<script>
			window.alert("Erro ao excluir o funcionario")
			window.location.href="../gerente/menu_funcionario-Gerente.php";
			</script>
			<?php
        }
    }
?>