<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" href="assents\css\logincoletor.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assents/img/dark_logo_transparent_background.png" alt=>
        </div>
        <div class="form">
            <form action="testelogin.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Faça o login</h1>
                    </div>
                
                </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Escreva o seu email" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="login-button">
                        <button type="submit" name='submit' id='submit'>Entrar</button>
                    </div>
                    
                </div>  
                  
            </form>
        </div>
    </div>
</body>

</html>