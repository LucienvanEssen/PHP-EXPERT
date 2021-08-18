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
    <title>Document</title>
</head>

<body>
    <h2>Weet je zeker dat je deze hero wilt verwijderen?</h2>
    <form method="POST">
        <input type="submit" name="submit" id="" value="Bevestigen">
    </form>
    <?php
    $query = $conn->prepare("DELETE FROM superheroes WHERE ID=:ID");
    $query->bindParam(":ID", $_GET['ID']);
    if (isset($_POST["submit"])) {
        $query->execute();
        header("Location: superheroes_index.php");
    }
    ?>
</body>

</html>