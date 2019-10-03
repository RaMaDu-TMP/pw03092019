<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/cadastro_funcionario.css"/>
        <link rel="shortcut icon" href="../img/logo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                        <li><a href="../login.php">Entrar</a></li>
                    </ul>
                </div>
            </nav> 
            
            <div class="login-page">
                <div class="form">                  
                    <h1 style="color: white;">Produtos</h1>
                    <form action="">
                        <button id="cadastro" type="submit">Cadastrar Produto</button>
                    </form>
                    <br>
                    <form action="">
                        <button id="visualiza" type="submit">Visualizar Produto</button>
                    </form>
                    <br>
                    <form action="">
                        <button id="altera" type="submit">Alterar Produto</button>
                    </form>
                    <br>
                    <form action="">
                        <button id="exclui" type="submit">Excluir Produto</button>
                    </form>
                    <br>
                    <a style="color:black;" href="menu_funcionario.php">Voltar</a>
                </div>
            </div>

            <div class="cad-page">
                <div class="form">
                    <form class="input-form" action="../controle_inserir/inserir_Produto.php" method='POST'>
                        <h1 style="color: white;">Produtos</h1>
                        <h5>Nome:</h5><br>
                        <input type="text" placeholder="nome" name='nomeProd' required/>
                        <h5>Descricao:</h5><br>
                        <input type="text" placeholder="descricao" name='descricaoProd' required/>
                        <h5>Quantidade:</h5><br>
                        <input type="number" placeholder="quantidade" name='qtdProd' required/>
                        <h5>Preço:</h5><br>
                        <input type="text" placeholder="preço" name='precoProd' required/>
                        <button type="submit">Cadastrar</button>
                        <a style="color:black;" href="menu_produtos-Funcionario.php">Voltar</a>
                    </form>
                </div>
            </div>

            <div class="visualiza-page">
                <div class="form">
                    <div id="buscaCod">
                        <form action="buscaIDProd.php" method="POST">
                            <h5>Codigo:</h5><br>
                            <input type="number" placeholder=" ID" name="codFunc" required/>
                            <button type="submit">Procurar</button>
                            <br>
                            <a style="color:black;" href="menu_produtos-Funcionario.php">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="altera-page">
                <div class="form">
                    <form class="input-form" action="../controle_alterar/alterar_Produto.php" method='POST'>
                        <h1 style="color: white;">Produtos</h1>
                        <h5>Codigo:</h5><br>
                        <input type="number" placeholder="codigo" name='codProd' required/>
                        <h5>Nome:</h5><br>
                        <input type="text" placeholder="nome" name='nomeProd' required/>
                        <h5>Descricao:</h5><br>
                        <input type="text" placeholder="descricao" name='descricaoProd' required/>
                        <h5>Quantidade:</h5><br>
                        <input type="number" placeholder="quantidade" name='qtdProd' required/>
                        <h5>Preço:</h5><br>
                        <input type="text" placeholder="preço" name='precoProd' required/>
                        <button type="submit">Atualizar</button>
                        <a style="color:black;" href="menu_produtos-Funcionario.php">Voltar</a>
                    </form>
                </div>
            </div>

            <div class="exclui-page">
                <div class="form">
                    <form class="input-form" action="../controle_excluir/excluir_Produto.php" method='POST'>
                        <h1 style="color: white;">Produtos</h1>
                        <h5>Codigo:</h5><br>
                        <input type="number" placeholder="codigo" name='codProd' required/>
                        <button type="submit">Excluir</button>
                        <a style="color:black;" href="menu_produtos-Funcionario.php">Voltar</a>
                    </form>
                </div>
            </div>
            
        </header>
        
        <footer>  
            <div class="rodapeCR">
                <img src="../img/cr.png" alt="">
            </div>
        </footer>

        <script src="../js/menu.js"></script>

    </body>
</html>
