<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="menu" id="menu">
        <a href="#">Login</a>
        <a href="#">Registrieren</a>
        <a href="#">AGB</a>
        <a href="#">Impressum</a>
        <a href="#">Standorte</a>
        <a href="#">unsere Flotte</a>
        <button oncclick="<?php  $_SESSION[$login] = true ?>;"onclick="window.location.href='header.php'">Login</button>
       </div>   
</body>
</html>