<?php

include "classes/InkooporderForm.php";
include 'classes/inkoop.php';

$form = new InkooporderForm();
$form->generateForm();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $levId = $_POST["leverancier"];
    $artId = $_POST["artikel"];
    $aantal = $_POST["aantal"];

    $inkoop = new Inkoop();
    $inkoop->insertInkoop($levId, $artId, $aantal);
}
if(isset($inkoop) && $inkoop == true){
    echo '<script>alert("Inkoop toegevoegd")</script>';
    echo "<script> location.replace('index.php'); </script>";
}
?>

<!DOCTYPE html>
<html>	
<a href="index.php">Terug</a></br>
<a href="index.php">Hoofdpagina</a>

</html>