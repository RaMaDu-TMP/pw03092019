<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/login.css"/>
        <link rel="shortcut icon" href="img/logo.png">
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
                    <a href="home.php"><img src="img/logo.png" alt=""></a>
                </div>
                
                <div class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                    </ul>
                </div>
            </nav> 

            <div class="login-page">
                <div class="form">                  
                    <h1 style="color: white;">Login</h1>
                    <form class="input-form">
                        <button id="funcionario" type="submit">Funcionário</button>
                    </form>
                    <br>
                    <form class="input-form">
                        <button id="gerente" type="submit">Gerente</button>
                    </form>
                </div>
            </div>
            
            <div class="login-funcionario">
                <div class="form">                  
                    <form class="input-form" action="login_funcionario.php" method="POST">
                        <h1 style="color: white;">Entrar</h1>
                        <h5>Nome:</h5>
                        <input type="text" placeholder="nome" name='nomeFunc' required/>
                        <h5>Senha:</h5>
                        <input type="password" placeholder="senha" name='senhaFunc' required/>
                        <button type="submit" >Entrar</button>
                        <br>
                        <a style="color:black;" href="login.php">Voltar</a>
                    </form>
                </div>
            </div>

            <div class="login-gerente">
                <div class="form">                  
                    <form class="input-form" action="login_gerente.php" method="POST">
                        <h1 style="color: white;">Entrar</h1>
                        <h5>Nome:</h5>
                        <input type="text" placeholder="nome" name='nomeGeren' required/>
                        <h5>Senha:</h5>
                        <input type="password" placeholder="senha" name='senhaGeren' required/>
                        <button type="submit" >Entrar</button>
                        <br>
                        <a style="color:black;" href="login.php">Voltar</a>
                    </form>
                </div>
            </div>
            
        </header>

       <footer>  
            <div class="rodapeCR">
                <img src="img/cr.png" alt="">
            </div>
        </footer>

        <script src="js/login.js"></script>

    </body>
</html>
