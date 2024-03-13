<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--Pre-sets-->
    <link rel="stylesheet" href="../preSets/preSets.css" />
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
    <!--Css-->
    <link rel="stylesheet" href="login.css" />
</head>

<body>

    <button class="back" onclick="history.back()">
        <i class="iconoir-arrow-left" id="icon"></i>
    </button>

    <div class="container">
        <form action="configLogin.php" method="POST">

            <h4>Login</h4>

            <div class="input-section">
                <label>Email <span class="required-color">*</span></label>
                <input type="email" placeholder="Informe seu email" id="email" name="email" required />
                <span id="email-error" class="hide required-color error-message">Email inválido</span>
                <span id="empty-email" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <div class="input-section">
                <label>Senha <span class="required-color">*</span></label>
                <input type="password" placeholder="Informe uma senha" id="senha" name="senha" required />
                <span id="password-error" class="hide required-color error-message">As senhas devem ter letras, símbolos
                    especiais, números e comprimento >= 8</span>
                <span id="empty-password" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <a class="link" href="../forgotPassword/forgotPassword.html">Esqueceu a senha?</a>

            <button type="submit" name="submit">Login</button>
        </form>

        <div class="footer">
            <p>Ainda não possui uma conta? </p>
            <a class="link" href="../register/register.php">Registrar</a>
        </div>
    </div>

    <script src="login.js"></script>

</body>

</html>