<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../banco/conecta.php');

/*
$_POST['nome']  = $_POST['nome']    ?? '';
$_POST['sobrenome']  = $_POST['sobrenome']    ?? '';
$_POST['email']  = $_POST['email']    ?? '';
$_POST['senha']  = $_POST['senha']    ?? '';
*/

$nome = $_POST['nome'] ?? false;

if ($nome) {
    
    $stmt = $bd -> prepare('    INSERT INTO rentall (nome) 
                                VALUES (:nome)'); 

    if ($stmt -> execute([':nome' => $nome]) ){

        echo "$nome gravado com sucesso!";

    }else{

        echo "Erro ao tentar gravar $nome!";
    }



}else{

    echo 'O campo nome é obrigatório';
}