<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/tabela_produtos.css"/>
        <link rel="shortcut icon" href="../img/logo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>EcoStore</title>
    </head>
    <body>
        <header>
          <nav>
                <div class="logo">
                    <a href="../home.php"><img src="../img/logo.png" alt=""></a>
                </div>
                
                <div class="menu">
                    <ul>
                        <li><a href="../home.php">Home</a></li>
                    </ul>
                </div>
            </nav> 
            
            <div class="tabela-produtos">
                <div class="form">
                    <?php
                        require_once 'ProdutoController.php';

                        $produto = new ProdutoController();
                        $resp = produto->getAll();

                        echo "<table class='table table-hover'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Nome</th><th>Descrição</th>";
                        echo "<th>Preço</th><th>Quantidade</th>";
                        echo "</tr>";
                        echo "</thead>";
                        foreach($resp as $linha){
                            echo "<tr>";
                            echo "<td>".$linha['codProd']."</td>";
                            echo "<td>".$linha['nomeProd']."</td>";
                            echo "<td>".$linha['descricaoProd']."</td>";
                            echo "<td>".$linha['qtdProd']."</td>";
                            echo "<td>".$linha['precoProd']."</td>";
                            echo "</tr>";
                            echo "</table>";
                            echo "<a style='color:black;' href='menu_gerente.php'>Voltar</a>"
                        }
                    ?>
                </div>
            </div>
            
        </header>

        <footer>  
            <div class="rodapeCR">
                <img src="../img/cr.png">
            </div>
        </footer>
    </body>
</html>
