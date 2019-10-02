<?php
	require_once 'Database.php';
	
	if(isset($_POST['nomeGeren'], $_POST['senhaGeren'])){

        $connected = new Database();
		$conn = $connected->connection();

		$login = $_POST['nomeGeren'];
		$senha = $_POST['senhaGeren'];
		
		$st=$conn->prepare(
            "SELECT * FROM gerente WHERE nomeGeren=:nomeGeren AND senhaGeren=:senhaGeren");
        $st->bindValue(":nomeGeren",$login); 
        $st->bindValue(":senhaGeren",$senha); 
        $st->execute();
		$st=$st->fetch();
        
		if(!empty($st)){
			?>
			<script>
			window.alert("Login Efetuado!");
			window.location.href="gerente/menu_gerente.php";
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