<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/cadastro_funcionario.css"/>
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
                        <li><a href="../home.php">HOME</a></li>
                    </ul>
                </div>
            </nav> 
            
            <div class="login-page">
                <div class="form">
                    <form class="input-form" action="" method='POST'>
                        <h1 style="color: white;">Cadastro</h1>
                        <h5>Nome:</h5><br>
                        <input type="text" placeholder="nome" name='nomeFunc' required/>
                        <h5>Email:</h5><br>
                        <input type="email" placeholder="email@email.com" name='emailFunc' required/>
                        <h5>Senha:</h5><br>
                        <input type="password" placeholder="senha" name='senhaFunc' required/>
                        <h5>Data de Nascimento:</h5><br>
                        <input type="date" placeholder="Data" name='dataNascimentoFunc' required/>
                        <button type="submit">Cadastrar</button>
                        <a style="color:black;" href="menu_gerente.php">Voltar</a>
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
