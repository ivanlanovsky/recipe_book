<?php
    $pdo = new PDO('mysql:host=localhost; port=3307; dbname=recipe_book', 'johny', 'cheater');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>