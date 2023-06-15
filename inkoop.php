<?php

require_once 'Database.php';

class Inkoop extends Database {
    public function insertInkoop($levId, $artId, $aantal) {
        $datum = date("Y-m-d");
        $sql = "INSERT INTO inkooporders (levId, artId, inkOrdDatum, inkOrdBestAantal, inkOrdStatus) VALUES (?, ?, ?, ?, 1)";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute([$levId, $artId, $datum, $aantal]);
        return true;
    }

    public function inkoopSelect($data, $subject) {
        echo "<select name='{$data}' required>";
        foreach ($subject as $sub) {
            foreach ($sub as $row) {
                echo "<option>{$row}</option>";
            }
        }
        echo "</select><br>";
    }

    public function deleteInkoop($data) {
        $sql = "DELETE FROM inkooporders WHERE inkOrdId = ?";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute([$data]);
    }
}
?>
