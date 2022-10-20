<?php

$domínio = 'localhost';
$nomeDoBanco = 'ambiente_virtual';
$admin = 'root';
$senha = '';
$sgbd = "mysql:host=$domínio;dbname=$nomeDoBanco";

$bancoDeDados = new PDO($sgbd,$admin,$senha);

$bancoDeDados->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['mensagem'])){

    try{
        $msg = $_POST['mensagem'];

        $comando = "INSERT INTO aviso(mensagem) VALUES ('$msg')";
        
        $bancoDeDados->query($comando);

        echo json_encode('A DENÚNCIA FOI ENCAMINHADA PARA O BD 🥵 ');
    }
    catch(PDOEXCEPTION $error){
        echo json_encode($error->getMessage());
    }
    
}



?>
