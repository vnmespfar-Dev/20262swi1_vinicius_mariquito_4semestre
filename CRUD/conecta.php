<?php
include("config_db.php");
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
