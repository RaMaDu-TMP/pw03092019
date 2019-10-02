<?php
	require_once 'Gerente.php';
	
	if(isset($_POST['codGeren'])){
		$gerente = new Gerente();
		$gerente->setNomeGeren($_POST['nomeGeren']);
		$gerente->setEmailGeren($_POST['emailGeren']);
        $gerente->setSenhaGeren($_POST['senhaGeren']);
        $gerente->setDataNascimentoGeren($_POST['dataNascimentoGeren']);
		if($gerente->alterar()){
			?>
			<script>
			window.alert("Gerente alterado com sucesso");
            window.location.href="../gerente/menu_gerente-Gerente.php";
			</script>
			<?php
		}else{
			?>
			<script>
			window.alert("Erro ao alterar o gerente!");
            window.location.href="../gerente/menu_gerente-Gerente.php";
			</script>
			<?php
		}
	}
?>