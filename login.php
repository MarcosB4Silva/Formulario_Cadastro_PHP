<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tela_login.css">
    <title>Login</title>
</head>
<body>
    <div class="box">
        <h1> Realize o Login </h1>
        <form action="testarlogar.php" method="POST">
            <input type="text" name="email" placeholder="E-mail" class="inputUser">
            <br><br>
            <input type="password" name="senha" placeholder="Senha" class="inputUser">
            <br><br>
            <input type="submit" name="submit" value="Enviar" class="btn">
        </form>
    </div>
</body>
</html>