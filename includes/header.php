<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vinícius Batirola Mittmann">
    <meta name="description" content="Sistema de controle para produção de suínos">
    <meta name="keywords" content="sistema, controle, produção, suínocultura, suíno">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../../css/login.css" rel="stylesheet">
    <title>SISTEMA DE CONTROLE PARA PRODUÇÃO DE SUÍNOS</title>
</head>
<body>
    <header>
        <input type="checkbox" id="check" onclick="MeuBotaoMenu()">
        <label for="check" class="checkbtn">&#9776;</label>
        <ul id="PrecisoParajs">
            <li><a href="../controller/loteController.php">Lote</a></li>
            <li><a href="../controller/gastosController.php?acao=adiciona">+  Gastos</a></li>
            <li><a href="../controller/recebimentosController.php?acao=adiciona">+  Recebimentos</a></li>
        </ul>
        <a class="icone-configuracoes" href="../views/configuracoes.php"><i class="fas fa-cog"></i></a>
    </header>
<script src="../js/header.js"></script>
</body>