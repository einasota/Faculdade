<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div id="enc">
            <form action="" method="POST">
            <label for="cry">Criptografar</label>
            <input id="cry"type="text" name="encrypto">
            <input type="submit" value="Enviar"></form>
        </div>
        <div class="des">
            <form action="" method="POST">
            <label for="encry">Descriptografar</label>
            <input id="encry"type="text" name="descrypto">
            <input type="submit" value="Enviar"></form>
        </div>
    </section>
    <?php
        $encrypto = $_POST["encrypto"];
        $descrypto = $_POST["descrypto"];

        $criptografado = base64_encode($encrypto);
        $descriptografado = base64_decode($descrypto);
    ?>
</body>
</html>