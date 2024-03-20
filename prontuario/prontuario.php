<?php
if(isset($_POST['submit'])){
    include_once('configProntuario.php');
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nasc = $_POST['nasc'];
    $sangue = $_POST['sangue'];
    $alergia = $_POST['alergia'];
   
    $result = mysqli_query($conexao, "INSERT INTO dadospront(nome,cpf,nasc,sangue,alergia) VALUES ('$nome','$cpf','$nasc','$sangue','$alergia') ");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre um prontuario</title>

    <!--Pre-sets-->
    <link rel="stylesheet" href="../preSets/preSets.css" />
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
    <!--CSS-->
    <link rel="stylesheet" href="prontuario.css" />
</head>

<body>

    <div class="container">
        <form action="prontuario.php" method="POST">

            <h4>Crie sua conta</h4>

            <div class="input-section">
                <label>Nome <span class="required-color">*</span></label>
                <input type="text" placeholder="Informe seu nome" id="name-input" name="nome" required />
            </div>

            <div class="input-section">
                <label>CPF <span class="required-color">*</span></label>
                <input type="text" placeholder="Informe seu CPF" id="name-input" name="cpf" required />
            </div>

            <div class="input-section">
                <label>Data de nascimento <span class="required-color">*</span></label>
                <input type="date" placeholder="Informe sua idade" id="name-input" name="nasc" required />
            </div>

            <div class="input-section">
                <label>Tipo sanguíneo <span class="required-color">*</span></label>
                <input type="text" placeholder="Informe seu tipo sanguíneo" id="name-input" name="sangue" required />
            </div>

            <div class="input-section">
                <label>Você possui alergia?<span class="required-color">*</span></label>
                <input type="text" placeholder="Informe sua alergia" id="name-input" name="alergia" required />
            </div>

            <button class="submit" id="submit" name="submit">Cadastrar</button>
        </form>

    </div>

</body>

</html>