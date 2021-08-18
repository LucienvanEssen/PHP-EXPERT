<?php
require_once "database.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="title" id="" placeholder="Title">
        <br>
        <input type="text" name="alignment" id="" placeholder="Alignment">
        <br>
        <input type="text" name="gender" id="" placeholder="Gender">
        <br>
        <input type="text" name="height" id="" placeholder="Height">
        <br>
        <input type="text" name="weight" id="" placeholder="Weight">
        <br>
        <input type="text" name="identity" id="" placeholder="Identity">
        <br>
        </label> <input type="text" name="maritalStatus" id="" placeholder="Martital Status">
        <br>
        <input type="text" name="eyes" id="" placeholder="Eyes">
        <br>
        <input type="text" name="hair" id="" placeholder="Hair">
        <br>
        <input type="text" name="placeOfBirth" id="" placeholder="Place of Birth">
        <br>
        <input type="text" name="placeOfDeath" id="" placeholder="PLace of Death">
        <br>
        <input type="text" name="citizenship" id="" placeholder="Citizenship">
        <br>
        <input type="text" name="occupation" id="" placeholder="Occupation">
        <br>
        <input type="submit" name="submit" id="" value="Bevestigen">
    </form>
    <?php
    $ID = $_GET["ID"];
    $query = $conn->prepare("UPDATE superheroes SET title=:title,alignment=:alignment,gender=:gender,height=:height,weight=:weight,identity=:identity,maritalStatus=:maritalStatus,eyes=:eyes,hair=:hair,placeOfBirth=:placeOfBirth,placeOfDeath=:placeOfDeath,citizenship=:citizenship,occupation=:occupation WHERE ID=:ID");
    $query->bindParam(":title", $_POST['title']);
    $query->bindParam(":alignment", $_POST['alignment']);
    $query->bindParam(":gender", $_POST['gender']);
    $query->bindParam(":height", $_POST['height']);
    $query->bindParam(":weight", $_POST['weight']);
    $query->bindParam(":identity", $_POST['identity']);
    $query->bindParam(":maritalStatus", $_POST['maritalStatus']);
    $query->bindParam(":eyes", $_POST['eyes']);
    $query->bindParam(":hair", $_POST['hair']);
    $query->bindParam(":placeOfBirth", $_POST['placeOfBirth']);
    $query->bindParam(":placeOfDeath", $_POST['placeOfDeath']);
    $query->bindParam(":citizenship", $_POST['citizenship']);
    $query->bindParam(":occupation", $_POST['occupation']);
    $query->bindParam(":ID", $ID);
    if (isset($_POST["submit"])) {
        $query->execute();
        header("Location: superheroes_show.php?ID=$ID");
    }
    ?>
</body>

</html>