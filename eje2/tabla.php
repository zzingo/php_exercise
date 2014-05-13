<?php

echo "<table border='1px'>";
for ($i = 0; $i < 4; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 5; $j++) {
        $res = (($i * 10) + $j);
        if ($res % 10 == 0) {
            if($i==0){
                echo "<td></td>";
            }else{
                echo "<td><b>" . $i . "</b></td>";
            }
        } else {
            if ($res>0 && $res<5) {
                echo "<td><b>" . $res . "</b></td>";
            }else{
                echo "<td>" . $res . "</td>";
            }
        }
    }
    echo "</tr>";
}
echo "</table>";
?>