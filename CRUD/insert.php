<?php
include("conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Verifica se os campos não estão vazios
    if (empty($nome) || empty($email)) {
        echo "Erro: Campos vazios.";
        exit;
    }

    try {
        $sql = "INSERT INTO tb_contatos (text_nome, varchar_email) VALUES (:nome, :email)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);

        $stmt->execute();
        echo "sucesso"; // Retorna exatamente "sucesso" para o JS validar
    } catch (PDOException $e) {
        // Mostra o erro exato do banco de dados na tela se falhar
        echo "Erro ao inserir: " . $e->getMessage();
    }
}
