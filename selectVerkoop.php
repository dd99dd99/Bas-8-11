<?php

include 'classes/verkoop.php';

$verkoop = new Verkoop(); 
$lijst = $verkoop->selectVerkoop();

$verkoop->showTable($lijst);
?>

<!DOCTYPE html>
<html>
<a href='verkooporders.php'>Terug</a></br>
<a href="index.php">Hoofdpagina</a>
</html>