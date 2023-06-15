<?php

include "classes/VerkooporderForm.php";
include 'classes/verkoop.php';

$form = new VerkooporderForm();
$form->generateForm();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $klantId = $_POST["klant"];
    $artId = $_POST["artikel"];
    $aantal = $_POST["aantal"];

    $verkoop = new Verkoop();
    $verkoop->insertVerkoop($klantId, $artId, $aantal);

}
	if(isset($verkoop) && $verkoop == true){
		echo '<script>alert("VerkoopOrder toegevoegd")</script>';
        echo "<script> location.replace('index.php'); </script>";
	}
?>

<!DOCTYPE html>
<html>
<a href='verkooporders.php'>Terug</a></br>
<a href="index.php">Hoofdpagina</a>
</html>
