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
    <title>Superheroes Informatie</title>
</head>

<body>
    <table>
        <?php
        $ID = $_GET['ID'];
        $query = "SELECT * FROM superheroes WHERE ID=" . $ID;
        $resultaat = $conn->query($query);

        while ($row = $resultaat->fetch(PDO::FETCH_ASSOC)) {
            $sleutelRij = "<tr>";
            $waardeRij = "<tr>";

            foreach ($row as $sleutel => $waarde) {
                $sleutelRij .= "<th>" . $sleutel . "</th>"; // $sleutelRij = "<tr><th>ID</th><th>Title</th>
                $waardeRij .= "<td>" . $waarde . "</td>"; //$waardeRij = "<tr><td>1025</td>
            }
            $sleutelRij .= "</tr>";
            $waardeRij .= "</tr>";

            echo $sleutelRij . $waardeRij;
        }
        ?>
    </table>
    <a href="superheroes_index.php"><button>Home</button></a>
    <a href="superheroes_edit.php?ID=<?php echo $ID ?>"><button>Edit</button></a>
    <a href="superheroes_delete.php?ID=<?php echo $ID ?>"><button>Delete</button></a>
</body>

</html>