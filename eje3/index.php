<?php

$count = 1;
echo "<table border='1px'>";
for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 10; $j++) {
        echo "<td><b>" . $count++ . "</b></td>";
    }
    echo "</tr>";
}
echo "</table>";
?>