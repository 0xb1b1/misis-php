<?php

if(!isset($_POST["width"]) || !isset($_POST["height"])) {
    header("Location: /1-table.html");
    exit();
}

$width = $_POST["width"];
$height = $_POST["height"];

echo "<table border=\"1\">";
for ($i = 0; $i < $height; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $width; $j++) {
        echo "<td>($i, $j)</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
