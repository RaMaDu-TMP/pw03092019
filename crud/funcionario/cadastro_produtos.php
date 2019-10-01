<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/cadastro_produtos.css"/>
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
            
            <div class="login-page">
                <div class="form">
                    <form class="input-form" action="" method='POST'>
                        <h1 style="color: white;">Cadastro de Produtos</h1>
                        <h5>Nome do Produto:</h5><br>
                        <input type="text" placeholder="Nome" name='nomeProd' required/>
                        <h5>Descrição:</h5><br>
                        <input type="text" placeholder="Descrição" name='descricaoProd' required/>
                        <h5>Preço:</h5><br>
                        <input type="number" placeholder="R$" step="number" name='precoProd' required/>
                        <h5>Quantidade:</h5><br>
                        <input type="number" placeholder="Quantidade" name='qtdProd' required/>
                        <button type="submit">Cadastrar Produto</button>
                        <a style="color:black;" href="menu_funcionario.php">Voltar</a>
                    </form>
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
