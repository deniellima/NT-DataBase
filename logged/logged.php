<?php
    session_start();

    //Verify logged
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])== true)){
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../login/login.php');
    }else{
        $logado= $_SESSION['email'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>

    <!--Pre-sets-->
    <link rel="stylesheet" href="../preSets/preSets.css" />
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
    <!--CSS-->
    <link rel="stylesheet" href="logged.css" />
</head>

<body>
    <header class="header">
        <nav class="nav bd-grid">

            <a href="../home/home.html"><h4>Cores</h4></a>

            <div class="menu" id="menu">
                <a href="#about" class="nav_link">Sobre</a>
                <a href="#tools" class="nav_link">Ferramentas</a>

                <button onclick="window.location.href='../sair.php'">Sair</button>
            </div> 
        </nav>
    </header>

    <section class="tools" id="tools">

        <div class="tools_row">
            <a href="../colorChange/colorChange.html">
                <div class="tool">
                    <i class="iconoir-palette" id="icon"></i>
                    <p>Gerar cores</p>
                </div>
            </a>
            <a href="../colorContrast/colorContrast.html">
                <div class="tool">
                    <i class="iconoir-brightness" id="icon"></i>
                    <p>Contraste</p>
                </div>
            </a>
            <a href="../colorPicker/colorPicker.html">
                <div class="tool">
                    <i class="iconoir-color-picker" id="icon"></i>
                    <p>Pegar cor</p>
                </div>
            </a>
            <a href="../colorRGB/colorRGB.html">
                <div class="tool">
                    <i class="iconoir-color-wheel" id="icon"></i>
                    <p>Cores RGB</p>
                </div>
            </a>

        </div>

</body>

</html>
