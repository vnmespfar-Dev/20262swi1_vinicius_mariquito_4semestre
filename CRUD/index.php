<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="jquery-4.1.0.min.js"></script>
    <?php include("exibeV.php"); ?>
</head>

<body>
    <input type="text" id="nome" name="nome" placeholder="Nome"><br><br>
    <input type="email" id="email" name="email" placeholder="E-mail"><br><br>
    <button type="button" id="btnEnviar">Enviar</button>

    <script>
        $(document).ready(function(){
            $("#btnEnviar").click(function() {
                var nome = $("#nome").val();
                var email = $("#email").val();

                if (nome === "" || email === "") {
                    alert("Por favor, preencha todos os campos.");
                    return false;
                }

                $.ajax({
                    url: "insert.php",
                    type: "POST",
                    data: { nome: nome, email: email },
                    dataType: "html",
                    success: function(resposta) {
                        alert("Cadastro realizado com sucesso!");
                        // Recarrega a página para o PHP processar e mostrar o novo dado na tabela
                        location.reload(); 
                    },
                    error: function() {
                        alert("Erro ao enviar.");
                    }
                });
            });
        });
    </script>
    <?php 
        mostrarTabela(); 
    ?>
</body>

</html>