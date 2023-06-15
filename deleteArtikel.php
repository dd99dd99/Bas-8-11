<!DOCTYPE html>
<html>
<head>
    <title>Deleten op Artikel ID</title>
</head>
<body>

<h2>Deleten op Artikel ID</h2>
    <form method="POST" action="deleteArtikel.php">
        <input type="text" name="artId" placeholder="Voer Artikel ID in">
        <input type="submit" name="submit" value="Verwijderen">
    </form>
    <a href="artikelen.php">Terug</a></br>
    <a href="index.php">Hoofdpagina</a>

<?php 

if(isset($_POST["submit"])){
    include 'classes/Artikel.php';

    $artikel = new Artikel();

    $artId = $_POST["artId"];

    $artikel->deleteArtikel($artId);
    echo '<script>alert("Artikel verwijderd")</script>';

    // Verwijderde artId tonen
    echo '<h3>Verwijderde artikel ID:</h3>';
    echo $artId;
}
?>

</body>
</html>
