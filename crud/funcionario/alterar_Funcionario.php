<?php
	require_once 'Funcionario.php';
	
	if(isset($_POST['codFunc'])){
		$funcionario = new Funcionario();
		$funcionario->setNomeFunc($_POST['nomeFunc']);
		$funcionario->setEmailFunc($_POST['emailFunc']);
        $funcionario->setSenhaFunc($_POST['senhaFunc']);
        $funcionario->setDataNascimentoFunc($_POST['dataNascimentoFunc']);
		if($funcionario->alterar()){
			?>
			<script>
			window.alert("Funcionario alterado com sucesso");
			window.location.href="../gerente/menu_funcionario-Gerente.php";
			</script>
			<?php
		}else{
			?>
			<script>
			window.alert("Erro ao alterar o funcionario!");
			window.location.href="../gerente/menu_funcionario-Gerente.php";
			</script>
			<?php
		}
	}
?>