<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="simbulo">
        <strong><span>Símbulo:</span></strong>
        <?php echo $_SESSION['simbulo'] ?>
    </div>
    <div class="nome">
        <strong><span>Nome:</span></strong>
        <?php echo $_SESSION['nome'] ?>
    </div>
    <div class="nmr_atomico">
        <strong><span>Número Atômico:</span></strong>
        <?php echo $_SESSION['nmr_atomico'] ?>
    </div>
    <div class="massa_atomica">
        <strong><span>Massa Atômica:</span></strong>
        <?php echo $_SESSION['massa_atomica'] ?>
    </div>
    <div class="grupo">
        <strong><span>Grupo:</span></strong>
        <?php echo $_SESSION['grupo'] ?>
    </div>
</body>
</html>