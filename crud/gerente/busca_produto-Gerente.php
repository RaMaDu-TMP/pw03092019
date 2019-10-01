<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/busca_produtos.css"/>
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
                    <div id="buscaCod">
                        <form action="../buscaID.php" method="POST">
                            <h5>ID:</h5><br>
                            <input id="1" type="number" placeholder=" ID" name="codProd" required/>
                            <button type="submit">Procurar</button>
                            <br>
                            <a style="color:black;" href="menu_gerente.php">Voltar</a>
                        </form>
                    </div>
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
