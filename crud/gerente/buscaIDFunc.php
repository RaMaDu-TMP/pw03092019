<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/busca_produtos.css"/>
        <link rel="shortcut icon" href="img/logo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>EcoStore</title>
    </head>
    <body>
        <header>
          <nav>
                <div class="logo">
                    <a href="home.php"><img src="img/logo.png" alt=""></a>
                </div>
                
                <div class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                    </ul>
                </div>
            </nav> 
            
            <div class="tabela-produtos">
                <div class="form">
                    <?php
                        require_once 'FuncionarioController.php';
                        
                        if(isset($_POST['codFunc'])){

                            $funcionario = new FuncionarioController();
                            $resp = funcionario->getByCodFunc($_POST['codFunc']);
                            
                            echo "<table class='table table-hover'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>Codigo</th>";
                            echo "<th>Nome</th><th>Email</th>";
                            echo "<th>Senha</th><th>Data de Nascimento</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tr>";
                            echo "<td>".$resp['codFunc']."</td>";
                            echo "<td>".$resp['nomeFunc']."</td>";
                            echo "<td>".$resp['emailFunc']."</td>";
                            echo "<td>".$resp['senhaFunc']."</td>";
                            echo "<td>".$resp['dataNascimentoFunc']."</td>";
                            echo "</tr>";
                            echo "</table>";
                            echo "<a style='color:black;' href='menu_funcionario-Gerente.php'>Voltar</a>";
                        }
                    ?>
                </div>
            </div>
            
        </header>

        <footer>  
            <div class="rodapeCR">
                <img src="img/cr.png">
            </div>
        </footer>
    </body>
</html>
