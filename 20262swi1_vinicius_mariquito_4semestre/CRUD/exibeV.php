<?php
function mostrarTabela() {
    // Inclui a conexão (ajuste o caminho se necessário)
    include("conecta.php");

    try {
        // Busca todos os registros
        $stmt = $pdo->query("SELECT text_nome, varchar_email FROM tb_contatos");
        $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erro ao buscar: " . $e->getMessage();
        $registros = [];
    }
    ?>

    <!-- Mini tabela simples ensinada em aula -->
    <br><br>
    <!DOCTYPE html>
    <html lang="pt-br">
    <body>
        <h3>Registros Cadastrados</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        
        <!-- O foreach percorrendo os registros do banco -->
        <?php foreach ($registros as $linha): ?>
            <tr>
                <td><?php echo htmlspecialchars($linha['text_nome']); ?></td>
                <td><?php echo htmlspecialchars($linha['varchar_email']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </body>
    </html>
    <?php
}
?>