<!DOCTYPE html>
<html>
<head>
    <title>Deleten op Inkooporder ID</title>
</head>
<body>

<h2>Deleten op Inkooporder ID</h2>
<form method="POST" action="deleteInkoop.php">
    <input type="text" name="inkOrdId" placeholder="Voer Inkooporder ID in">
    <input type="submit" name="submit" value="verwijderen">
</form>
<a href="delete.php">Terug</a></br>
<a href="index.php">Hoofdpagina</a>

<?php 

if(isset($_POST["submit"])){
    include 'classes/Inkoop.php';
    $inkoop = new Inkoop();
    $inkOrdId = $_POST["inkOrdId"];

    // Klant verwijderen
    $inkoop->deleteInkoop($inkOrdId);
    echo '<script>alert("Inkooporder verwijderd")</script>';
       
    // Verwijderde inkOrdId tonen      
	echo '<h3>Verwijderde inkooporder ID:</h3>';
	echo $inkOrdId;
}
?>

</body>
</html>
