<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>

</head>

<body>
    <input type="text" id="nome" name="nome"><br>
    <input type="email" id="email" name="email"><br>
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
                    data: "nome=" + nome + "&email=" + email,
                    dataType: "html",
                    success: function(resposta) {
                        alert("Sucesso Porra!");
                    },
                    error: function() {
                        alert("Fudeu");
                    }
                });
            });
        });
    </script>
</body>

</html>