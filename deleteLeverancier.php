<!DOCTYPE html>
<html>
<head>
    <title>Deleten op Leverancier ID</title>
</head>
<body>

<h2>Deleten op Leverancier ID</h2>
    <form method="POST" action="deleteLeverancier.php">
        <input type="text" name="levId" placeholder="Voer Leverancier ID in">
        <input type="submit" name="submit" value="Verwijderen">
    </form>
    <a href="index.php">Terug</a>

<?php 

if(isset($_POST["submit"])){
    include 'classes/Leverancier.php';

    $leverancier = new Leverancier();

    $levId = $_POST["levId"];

    $leverancier->deleteLeverancier($levId);
    echo '<script>alert("Leverancier verwijderd")</script>';

    // Verwijderde levId tonen
    echo '<h3>Verwijderde leverancier ID:</h3>';
    echo $levId;
}
?>

</body>
</html>
