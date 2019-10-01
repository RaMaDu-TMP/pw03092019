<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/visualizar_produtos.css"/>
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
                        <li><a href="menu.php">Home</a></li>
                    </ul>
                </div>
            </nav> 
            
            <div class="tabela-produtos">
                <div class="form">
                    <?php
                        require_once 'ProdutoController.php';
                        
                        if(isset($_POST['codProd'])){

                            $produto = new ProdutoController();
                            $resp = produto->getByCodProd($_POST['codProd']);
                            
                            echo "<table class='table table-hover'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>Nome</th><th>Descrição</th>";
                            echo "<th>Preço</th><th>Quantidade</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tr>";
                            echo "<td>".$resp['codProd']."</td>";
                            echo "<td>".$resp['nomeProd']."</td>";
                            echo "<td>".$resp['descricaoProd']."</td>";
                            echo "<td>".$resp['qtdProd']."</td>";
                            echo "<td>".$resp['precoProd']."</td>";
                            echo "</tr>";
                            echo "</table>";
                            echo "<a style='color:black;' href='menu_funcionario.php'>Voltar</a>";
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
