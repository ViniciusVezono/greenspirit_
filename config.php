<?php
// declarando e definindo as variáveis utilizadas para a conexão
// MySql e acesso ao banco de dados agenda_de_contatos

$servidorMySql = "Localhost";   // servidor
$usuarioMySql = "root";     //usuario
$senhaMysql = ""; // senha 
$bancoMySql = "greenspirit"; //nome do banco de dados

$conexao = new mysqli($servidorMySql,$usuarioMySql,$senhaMysql,$bancoMySql);
    

    if ($conexao->connect_errno)
    {
            //MENSAGEM DO ERRO 
            echo "<script>alert('Erro ao conectar com o Banco de Dados');</script>";
    }    
    else
    {
        echo "<script>alert('Banco de dados conectado ');</script>";
    }
