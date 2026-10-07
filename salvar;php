<?php
include("conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    try {
        $sql = "INSERT INTO tb_contatos (text_nome, varchar_email) VALUES (:nome, :email)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);

        $stmt->execute();
        echo "Cadastro realizado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao inserir: " . $e->getMessage();
    }
};
