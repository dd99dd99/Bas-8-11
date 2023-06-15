<?php
echo "<h1>Alle artikelen</h1>";

include 'classes/artikel.php';

$artikel = new Artikel(); 
$lijst = $artikel->selectArtikel();

$artikel->showTable($lijst);
?>

<!DOCTYPE html>
<html>	
<a href="artikelen.php">Terug</a></br>
    <a href="index.php">Hoofdpagina</a>

</html>