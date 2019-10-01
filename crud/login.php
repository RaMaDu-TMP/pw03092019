<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/login.css"/>
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
            
            <div class="login-page">
                <div class="form">                  
                    <form class="input-form" action="gerente/menu_gerente.php" method="POST">
                        <h1 style="color: white;">Entrar</h1>
                        <h5>Nome:</h5>
                        <input type="text" placeholder="usuário" name='nomeFunc' required/>
                        <h5>Senha:</h5>
                        <input type="password" placeholder="senha" name='senhaFunc' required/>
                        <button type="submit" >Entrar</button>
                    </form>
                </div>
            </div>
            
        </header>

       <footer>  
            <div class="rodapeCR">
                <img src="img/cr.png" alt="">
            </div>
        </footer>
    </body>
</html>
