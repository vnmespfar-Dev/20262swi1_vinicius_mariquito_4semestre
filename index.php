<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>

<body>
    <form id="formContato">
        <input type="text" id="nome" name="nome" placeholder="Nome"><br><br>
        <input type="email" id="email" name="email" placeholder="E-mail"><br><br>
        <button type="submit">Enviar</button>
    </form>

    <script>
        document.getElementById('formContato').addEventListener('submit', function(e) {
            e.preventDefault();
            fetch('salvar.php', {
                method: 'POST',
                body: new FormData(this)
            });
        });
    </script>

</body>

</html>
