<?php
session_start();
//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
     {
          //acessa o sistema 
          include_once('config.php');
          $email = $_POST['email'];
          $senha = $_POST['senha'];
          


          //print_r('Email:  ' . $email);
          //print_r('Senha:  ' . $senha);

          $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha= '$senha' ";
          $result = $conexao->query($sql);
    
          // print_r($result);

          if(mysqli_num_rows($result) < 1 )
               {
                    unset($_SESSION['email']);
                    unset($_SESSION['senha']);
                    header('Location: logincoletor.php');   
               }
          else ($row = mysqli_fetch_row($result));
               {
               $_SESSION['email'] = $email;
               $_SESSION['senha'] = $senha;
               //$_SESSION['nome'] = $nome;
               $_SESSION['nome'] = 'Gabriela';
               $_SESSION['telefone'] = $row['telefone'] ;
               $_SESSION['sexo'] = $row['sexo'];
               $_SESSION['cep'] = $row['cep'];
               $_SESSION['confirmSenha'] = $row['confirmSenha'];
               $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
               $result = $conexao->query($sql);
               header('Location: sistema.php');

               }
     }

else 
     {
          //Não acessa 
          header('Location: logincoletor.php');
     }
 

?>