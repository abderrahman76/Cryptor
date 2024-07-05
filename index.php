<?php  include "fonction.php";  ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <title >Julius Caesar Cipher</title>
</head>
<body>
    <div class="centered-div">
    <h1 class="title">Julius Caesar Cipher</h1>
    <form method="POST">
        <label class="title" for="plaintext">text:</label>
        <input type="text" id="plaintext" name="plaintext" required>
        <br>
        <label class="title" for="key">Key:</label>
        <input type="number" id="key" name="key" min="1" max="25" required>
        <br>
        <input class="button" type="submit" name="encrypt" value="Encrypt">
        <input class="button" type="submit" name="decrypt" value="Decrypt">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $plaintext = $_POST["plaintext"];
        $key = $_POST["key"];
        if (isset($_POST["encrypt"])) {
            $ciphertext = encrypt($plaintext, $key);
            echo "<p>Ciphertext: " . $ciphertext . "</p>";
        } else if (isset($_POST["decrypt"])) {
            $ciphertext = decrypt($plaintext, $key);
            echo "<p>Decrypted Plaintext: " . $ciphertext . "</p>";
        }
    }
    ?>
    </div>
</body>
</html>
