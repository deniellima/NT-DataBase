<?php
if(isset($_POST['submit'])){
    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $verify = $_POST['verify'];
   
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,senha,verify) VALUES ('$nome','$email','$telefone','$senha','$verify') ");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>

    <!--Pre-sets-->
    <link rel="stylesheet" href="../preSets/preSets.css" />
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
    <!--CSS-->
    <link rel="stylesheet" href="register.css" />
</head>

<body>

    <button class="back" onclick="history.back()">
        <i class="iconoir-arrow-left" id="icon"></i> 
    </button>

    <div class="container">
        <form action="register.php" method="POST">

            <h4>Crie sua conta</h4>

            <div class="input-section">
                <label>Nome <span class="required-color">*</span></label>
                <input type="text" placeholder="Informe seu nome" id="name-input" name="nome" required />
                <span id="name-error" class="hide required-color error-message">Nome inválido</span>
                <span id="empty-name" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <div class="input-section">
                <label>Email <span class="required-color">*</span></label>
                <input type="email" placeholder="Informe seu email" id="email" name="email" required />
                <span id="email-error" class="hide required-color error-message">Email inválido</span>
                <span id="empty-email" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <div class="input-section">
                <label>Telefone <span class="required-color">*</span></label>
                <input type="text" placeholder="Informe seu telefone" id="telefone" name="telefone" required />
                <span id="email-error" class="hide required-color error-message">Telefone inválido</span>
                <span id="empty-telefone" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <div class="input-section">
                <label>Senha <span class="required-color">*</span></label>
                <input type="password" placeholder="Informe uma senha" id="password" name="senha" required />
                <span id="password-error" class="hide required-color error-message">As senhas devem ter letras, símbolos
                    especiais, números e comprimento >= 8</span>
                <span id="empty-password" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <div class="input-section">
                <label>Confirme a senha <span class="required-color">*</span></label>
                <input type="password" id="verify-password" placeholder="Confirme sua senha" name="verify" required />
                <span id="verify-password-error" class="hide required-color error-message">A senha deve ser igual a
                    anterior</span>
                <span id="empty-verify-password" class="hide required-color error-message">Campo obrigatório</span>
            </div>

            <button class="submit" id="submit" name="submit">Registrar</button>
        </form>

        <div class="footer">
            <p>Já possui uma conta? </p>
            <a class="link" href="../login/login.php">Login</a>
        </div>
    </div>

    <script src="register.js"></script>

</body>

</html>