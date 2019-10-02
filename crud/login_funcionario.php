<?php
	require_once 'Database.php';
	
	if(isset($_POST['nomeFunc'], $_POST['senhaFunc'])){

        $connected = new Database();
		$conn = $connected->connection();

		$login = $_POST['nomeFunc'];
		$senha = $_POST['senhaFunc'];
		
		$st=$conn->prepare(
            "SELECT * FROM funcionario WHERE nomeFunc=:nomeFunc AND senhaFunc=:senhaFunc");
        $st->bindValue(":nomeFunc",$login); 
        $st->bindValue(":senhaFunc",$senha); 
        $st->execute();
		$st=$st->fetch();
        
		if(!empty($st)){
			?>
			<script>
			window.alert("Login Efetuado!");
			window.location.href="funcionario/menu_funcionario.php";
			</script>
			<?php
		}else{
			?>
			<script>
			window.alert("Usuário ou senha incorretos!");
			window.location.href="login.php";
			</script>
			<?php
		}
	}
?>