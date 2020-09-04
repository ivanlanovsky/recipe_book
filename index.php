<?php
    require_once "pdo.php";

    function ingredients($pdo){
        echo "<pre>\n";
        $statement = $pdo->query("SELECT * FROM ingredient");
        echo "<table>";
        while($row = $statement->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>";
            echo ($row['ingredient_name']);
            echo "</td><td>";
            echo ($row['ingredient_photo']);
            echo "</td><td>";
            echo ($row['ingredient_description']);
            echo ("</td></tr>\n");
        }
        echo "</table>";
    } 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Your Recipe Book</title>
    <?php require_once "bootstrap.php"; ?>
    </head>
    <body>
        <nav>
            <a href="allrecipes.html">All recipes</a>
            <a href="myrecipes.html">My recipes</a> 
        </nav>
        <h1>Ingredients we can use:</h1>
        <?php 
            ingredients($pdo);
        ?>
    </body>
</html>
