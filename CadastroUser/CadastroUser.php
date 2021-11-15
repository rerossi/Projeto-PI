<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../banco/conecta.php');

/*$nome = $_POST['nome'] ?? false;
$sobrenome = $_POST['sobrenome'] ?? false;
$email = $_POST['email'] ?? false;
$senha = $_POST['senha'] ?? false;
*/
    
    $stmt = $bd -> prepare('    INSERT INTO usuario (nome, sobrenome, email, senha ) 
                                VALUES (:nome, :sobrenome, :email, :senha)'); 

    $valores[':nome'] = $_POST['nome'];                                
    $valores[':sobrenome'] = $_POST['sobrenome'];                                
    $valores[':email'] = $_POST['email'];                                
    $valores[':senha'] = $_POST['senha'];                                

    if ($stmt -> execute($valores)){

        echo "Gravado com sucesso!";

    }else{
        var_dump($stmt);
        echo "Erro ao tentar gravar!";
    }

