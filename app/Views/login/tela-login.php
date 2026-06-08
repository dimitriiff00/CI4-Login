<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f0f0f0;
        }

        .card {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            border: 1px solid #ddd;
            width: 300px;
        }

        h2 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 4px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #534AB7;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }

        button:hover {
            background: #3C3489;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Login</h2>

        <label for="usuario">Usuário</label>
        <input type="text" id="usuario" placeholder="Digite seu usuário">

        <label for="senha">Senha</label>
        <input type="password" id="senha" placeholder="Digite sua senha">

        <button type="button">Entrar</button>
    </div>

</body>
</html>