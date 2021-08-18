<?php
require_once "database.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes Homepagina</title>
</head>

<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Alignment</th>
        </tr>
        <?php

        $query = "SELECT Title,Alignment,ID FROM superheroes";
        $resultaat = $conn->query($query);

        while ($row = $resultaat->fetch()) {
            echo '<tr>' . '<td>' .  '<a href="superheroes_show.php?ID=' . $row['ID'] . '">' . $row['Title'] . '</a>' . '</td>' . '<td>' . $row['Alignment'] . '</td>' . '</tr>';
        }

        ?>
    </table>
</body>

</html>