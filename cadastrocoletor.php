<?php
session_start();
    if(isset($_POST['submit']))
    {


        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];   
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $cep = $_POST['cep'];
        $confirmSenha = $_POST['confirmSenha'];
    
        $result = mysqli_query($conexao, "INSERT INTO usuario(nome,senha,email,telefone,sexo,cep,confirmSenha) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$cep','$confirmSenha')");

    

        header('Location: logincoletor.php');
    }
?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" href="assents\css\cadastrocoletorstyle.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assents/img/dark_logo_transparent_background.png" alt=>
        </div>
        <div class="form">
            <form action="cadastrocoletor.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de morador</h1>
                    </div>
                    <div class="login">
                        <h4>Possui uma conta? <a href="logincoletor.php">entre</a></h4>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome"> Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu  nome" required>
                    </div>

                    <div class="input-box">
                        <label for="ce">CEP</label>
                        <input id="cep" type="text" name="cep" placeholder="Digite seu CEP" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="telefone">Celular</label>
                        <input id="telefone" type="tel" name="telefone" placeholder="(xx)xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    

                    <div class="input-box">
                        <label for="confirmSenha">Confirme sua Senha</label>
                        <input id="confirmSenha" type="password" name="confirmSenha" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="Feminino" type="radio" name="sexo" value="Feminino">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="Masculino" type="radio" name="sexo" value="Masculino">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="Outros" type="radio" name="sexo" value="Outros">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="Naodizer" type="radio" name="gender" value="Prefiro não dizer">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                    
                <div class="continue-button">
                    <button type="submit" name="submit" id="submit">Enviar </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>