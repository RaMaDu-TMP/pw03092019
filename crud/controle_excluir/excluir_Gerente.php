<?php

    require_once 'Gerente.php';

    if(isset($_POST['codGeren'])){
        $gerente = new Funcionario();
        $gerente->setID($_POST['codGeren']);

        if($gerente->apagar()){
            ?>
			<script>
			window.alert("Gerente excluido com sucesso")
			window.location.href="../gerente/menu_gerente-Gerente.php";
			</script>
			<?php
        }else{
            ?>
			<script>
			window.alert("Erro ao excluir o gerente")
			window.location.href="../gerente/menu_gerente-Gerente.php";
			</script>
			<?php
        }
    }
?>