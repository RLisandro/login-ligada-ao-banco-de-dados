<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro dos (as) alunos (as)</title></head>

<body>
    <form action="conexao.php" method="POST">
         E-mail: <label for="email"></label>
        <input type="email" name="email" placeholder="Digite seu e-mail" id="email" required>
        </p>
        <p>
        Senha: <label class="senha" for="senha"> </label>
            <input type="password" name="senha" placeholder="Digite sua senha">
        </p>
        <p>
            <input class="enviar" type="submit" value="Enviar">
        </p>
    </form>
</body>

</html>