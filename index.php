<?php
include("conecta.php"); 
try{
$sql = "INSERT INTO tb_contatos (text_nome,varchar_email) VALUES (:nome, :email)";
$stmt = $pdo->prepare($sql);

$nome = "Maria Silva";
$email = "maria@email.com";

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);

$stmt->execute();
} catch (PDOException $e){
    echo "Erro ao inserir:" . $e->getMessage();
}
?>
