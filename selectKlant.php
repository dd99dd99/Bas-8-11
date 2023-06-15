<?php

include 'classes/klant.php';

$klant = new Klant(); 
$lijst = $klant->selectKlant();

$klant->showTable($lijst);
?>

<!DOCTYPE html>
<html>
<body>
	
<a href='klanten.php'>Terug</a></br>
<a href="index.php">Hoofdpagina</a>

</body>
</html>