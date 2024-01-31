<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        form {
            margin: 20px auto;
            border: 1px solid black;
            border-radius: 10px;
            width: 400px;
            padding: 10px;
            box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.100);
        }
        h1 {
            text-align: center;
        }
        div {
            width: 300px;
            margin: 20px auto;
        }
        input {
            width: 300px;
            display: block;
            margin: auto;
        }
        button {
            border: none;
            padding: 10px;
            border-radius: 10px;
            width: 50%;
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Faça seu login</h1>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>