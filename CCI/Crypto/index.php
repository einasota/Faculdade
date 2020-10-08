<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div id="enc" class="des">
            <h1 class="title">CRYPTO</h1>
            <h3 class="title">Criptográfia e Descriptográfia</h3>
            <form action="" method="POST">
                <label class="label" for="cry">Criptografar:</label>
                <input id="cry" type="text" class="input" name="encrypto">
                <p class="result" id="result1"></p>
                <input class="button" type="submit" value="Enviar">
            </form>
            <br>
            <form action="" method="POST">
                <label class="label" for="encry">Descriptografar:</label>
                <input id="encry" type="text" class="input" name="descrypto">
                <p class="result" id="result2"></p>
                <input class="button" type="submit" value="Enviar">
            </form>
            <br>
            <p style="text-align: right;">Criado por <a href="https://github.com/einasota">Jhonata Souza</a></p>
        </div>
    </section>
    <?php
    $encrypto = $_POST["encrypto"];
    $descrypto = $_POST["descrypto"];

    $criptografado = base64_encode($encrypto);
    $descriptografado = base64_decode($descrypto);
    ?>
    <script type="text/javascript">
        const cript = document.getElementById('result1').innerHTML="Resultado: <?php echo "$criptografado";?>"
        const cript2 = document.getElementById('result2').innerHTML="Resultado: <?php echo "$descriptografado";?>"
    </script>
</body>

</html>