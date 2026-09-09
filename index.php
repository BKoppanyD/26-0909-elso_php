<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kezdőlap</title>
</head>

<body>

<?php

$nevem = "Koppány";

if (isset($_POST["btnPost"])) {
    echo "Megnyomtad a gombot!";
}

if (isset($_POST["btnDelete"])) {
    echo "Törlés megtörtént!";
}

?>

<h1>
    Üdvözöllek a kezdőlapon, <?php print($nevem); ?>!
</h1>

<form action="welcome.php" method="post">
    Name:
    <input type="text" name="name">
    <br>

    E-mail:
    <input type="text" name="email">
    <br>

    <input type="submit">
</form>

<br>

<form method="post">
    <button name="btnPost">Nyomd meg!</button>
</form>

<br>

<form method="post">
    <button name="btnDelete">Töröld!</button>
</form>

</body>
</html>