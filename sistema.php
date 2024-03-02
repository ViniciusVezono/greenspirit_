<?php
    session_start();
    //print_r($_SESSION);


    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
     {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: logincoletor.php');
     }  
     
     $email = $_SESSION['email'];
     $senha  = $_SESSION['senha'];
     
     

?>

<!doctype html>
<html lang="pt-br">

    <head>
        <title>Green Spirit</title>
        <meta charset="utf-8">
        <!-- link css -->
        <link rel="stylesheet" type="text/css" href="assents\css\sistema.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>

    <body>
        <!--definindo navegação inicial-->
       <div class="hero">         
            <nav>
                <div class="imglogo">
                        <img src="assents/img/imglogo.png" id='logo'alt="logo">
                </div>
                <div class="barra-navegação">  
                    <div class="nome">              
                        <h2 class="logo">Green<span>Spirit</span></h2>
                    </div>
                    
                    <div class="subpaginas">
                        <ul>
                            <li><a href="index.html">Início</a></li>
                            <li><a href="index.html#nos">Quem somos</a></li>
                            <li><a href="index.html#contat0">Contato</a></li>
                            <li><a href="indexrecicle.html">Como Reciclar</a></li>
                            <li><a href="Indexeco.html">EcoPontos</a></li>
                        </ul>
                    </div>
                    <div class="perfil">
                        <ul>
                            
                        </ul>
                    </div>
                    <div class="botoes">
                        <button type ="button" class="btn-coletor"><a href="sairsessao.php">Sair</a></button>
                    </div>
                </div>    
            </nav>    
            <section class="seccion-perfil-usuario">
                    <div class="perfil-usuario-header">
                    </div>
                    <div class="perfil-usuario-body">
                        <div class="perfil-usuario-bio">
                            <h3 class="titulo"> Seja bem vinda, <?php echo $_SESSION['nome'] ?></h3>
                            <!--<p class="texto">texto de descriçao ?????</p> -->
                        </div>
                        <!--<div class="perfil-usuario-footer">
                            <ul class="lista-datos">
                                <li><i class="icono fas fa-map-signs">Endereço:</i>
                                <li><Telefone: class="icono fas fa-phone-alt">Telefone:</li>
                                <li><Senha: class="icono fas fa-building">Senha: <?php echo $senha?></li>
                                <li><Sexo: class="icono fas fa-user-check">Sexo:</li>
                                <li><Sexo: class="icono fas fa-user-check">Email: <?php echo $email?> </li>
                            </ul>
                        </div> -->
                    </div>
                </section>
        </div>
        
    </body>
</html>