<!DOCTYPE html>
<html>
<head>
    <title>Deleten op Verkooporder ID</title>
</head>
<body>

<h2>Deleten op Verkooporder ID</h2>
    <form method="POST" action="deleteVerkoop.php">
        <input type="text" name="verkOrdId" placeholder="Voer Verkooporder ID in">
        <input type="submit" name="submit" value="Verwijderen">
    </form>
    <a href="Verkooporders.php">Terug</a></br>
    <a href="index.php">Hoofdpagina</a>

<?php 

if(isset($_POST["submit"])){
    include 'classes/Verkoop.php';

    $verkoop = new Verkoop();

    $verkOrdId = $_POST["verkOrdId"];

    $verkoop->deleteVerkoop($verkOrdId);
    echo '<script>alert("Verkooporder verwijderd")</script>';

    // Verwijderde verkOrdId tonen
    echo '<h3>Verwijderde Verkooporder ID:</h3>';
    echo $verkOrdId;
}
?>

</body>
</html>
